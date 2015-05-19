<?php

	class Saki {

		static function init() {
			global $site;
			# Overwrite the default router
			$site->addRoute('/:page', 'Saki::router');
		}

		static function router($params) {
			global $site;
			$slug = get_item($params, 1);
			if ( $slug && self::isPattern($slug) ) {
				$site->pattern = self::getPatternDetails($slug);
				$site->addBodyClass("pattern-{$slug}");
				return Site::getPage('pattern');
			} else {
				return Site::getPage($params);
			}
		}

		static function isPattern($pattern) {
			global $site;
			$ret = false;
			$dir = $site->baseDir('/pages/patterns');
			$cache = $site->baseDir('/pages/patterns/patterns.cache');
			if ( file_exists($cache) ) {
				$patterns = json_decode(file_get_contents($cache));
				$ret = property_exists($patterns, $pattern);
			}
			return $ret;
		}

		static function getPatternDetails($pattern) {
			global $site;
			$ret = null;
			$dir = $site->baseDir('/pages/patterns');
			$cache = $site->baseDir('/pages/patterns/patterns.cache');
			if ( file_exists($cache) ) {
				$patterns = json_decode(file_get_contents($cache));
				if ( property_exists($patterns, $pattern) ) {
					$ret = $patterns->$pattern;
				}
			}
			return $ret;
		}

		static function fetchPatternDetails($pattern) {
			global $site;
			$ret = array();
			$details_file = $site->baseDir("/pages/patterns/{$pattern}/details.json");
			$desktop_file = $site->baseDir("/pages/patterns/{$pattern}/desktop.css");
			$mobile_file = $site->baseDir("/pages/patterns/{$pattern}/mobile.css");
			$script_file = $site->baseDir("/pages/patterns/{$pattern}/script.js");
			$html_file = $site->baseDir("/pages/patterns/{$pattern}/html.php");
			$thumbnail_file = $site->baseDir("/pages/patterns/{$pattern}/thumbnail.png");
			$has_details = file_exists($details_file);
			$has_desktop = file_exists($desktop_file);
			$has_mobile = file_exists($mobile_file);
			$has_script = file_exists($script_file);
			$has_html = file_exists($html_file);
			$has_thumbnail = file_exists($thumbnail_file);
			$ret['name'] = $pattern;
			$ret['slug'] = $pattern;
			$ret['thumbnail'] = $has_thumbnail ? $site->urlTo("/pages/patterns/{$pattern}/thumbnail.png") : $site->img('titi.jpg', false);
			$ret['styles'] = array();
			$ret['scripts'] = array();
			# Parse details
			if ($has_details) {
				$details = json_decode( file_get_contents($details_file) );
				$ret['name'] = property_exists($details, 'name') ? $details->name : $pattern;
				$ret['description'] = property_exists($details, 'description') ? $details->description : '';
				$ret['author'] = property_exists($details, 'author') ? $details->author : '';
				$ret['category'] = property_exists($details, 'category') ? $details->category : '';
				# Add extra styles
				if ( property_exists($details, 'styles') && $details->styles ) {
					foreach ($details->styles as $name => $style) {
						$ret['styles'][$name] = $style;
					}
				}
				# Add extra scripts
				if ( property_exists($details, 'scripts') && $details->scripts ) {
					foreach ($details->scripts as $name => $script) {
						$ret['scripts'][$name] = $script;
					}
				}
			}
			$ret['hasHTML'] = $has_html;
			$ret['hasCSS'] = $has_desktop || $has_mobile;
			$ret['hasJS'] = $has_script;
			# Pattern stylesheets
			if ( $has_mobile ) {
				$ret['styles']['mobile-pattern'] = $site->urlTo("/pages/patterns/{$pattern}/mobile.css");
			}
			if ( $has_desktop ) {
				$ret['styles']['desktop-pattern'] = $site->urlTo("/pages/patterns/{$pattern}/desktop.css");
			}
			# Pattern script
			if ( $has_script ) {
				$ret['scripts']['script-pattern'] = $site->urlTo("/pages/patterns/{$pattern}/script.js");
			}
			return $ret;
		}

		static function getPatternsList($reload = false, $dir = '') {
			global $site;
			$dir = $dir ? $dir : $site->baseDir('/pages/patterns');
			$cache = $site->baseDir('/pages/patterns/patterns.cache');
			$dh  = opendir($dir);
			$patterns = array();
			if (! file_exists($cache) || filemtime($cache) < time() - 900 || $reload) {
				# Regenerate the cache file
				while (false !== ($pattern = readdir($dh))) {
					# Skip . and ..
					if ( $pattern == '.' || $pattern == '..' || $pattern == 'empty-pattern' ) continue;
					# Check current entry
					if ( is_dir("{$dir}/{$pattern}") ) {
						$item = self::fetchPatternDetails($pattern);
						if ($item) {
							$patterns[$pattern] = $item;
						}
					}
				}
				# Save to cache
				file_put_contents($cache, json_encode($patterns));
			}
			# And load the cache file
			$patterns = json_decode(file_get_contents($cache));
			return $patterns;
		}

	}

?>