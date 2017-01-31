<?php 
	class Settings {
		private static $_instance = null;

		private function _construct () {}

		protected function _clone  () {}

		public static function get_instance () {
			if (is_null(self::$_instance)) {
				self::$_instance = new self();
			} 

			return self::$_instance;
		}
	}
	

	$s = new Settings;
	var_dump(spl_object_hash($s::get_instance()));

	$s2 = new Settings;
	var_dump(spl_object_hash($s2::get_instance()));

?>