<?php
/**
 * Class Crap
 */
class Crap {

	public function __construct( $init_parameter ) {
		$this->fail = $init_parameter;
		if ( in_array( 'js', $this->fail ) ) {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_js' ) );
		}
		if ( in_array( 'wpcontent', $this->fail ) ) {
			add_filter( 'the_content', array( $this, 'crappy_content' ) );
		} else {
			add_filter( 'the_content', array( $this, 'good_content' ) );
		}

		if ( in_array( 'php', $this->fail ) ) {
			if ( ! is_admin() || in_array( 'backend', $this->fail ) ) {
				wp_die( 'Website is broken' );
			}
		}

		if ( in_array( 'memory', $this->fail ) ) {
			if ( ! is_admin() ) {
				echo memory_get_usage() . "\n";
			}
		}
	}
	public function enqueue_js() {
			wp_enqueue_script( 'crappyjs', PLUGIN_URL . 'public/js/crappy.js', array( 'jquery' ), false, false );
	}

	// missing argument in first function
	public function crappy_content() {
			$content .= 'Ups, something went wrong!';
			return $content;
	}
	public function good_content( $content ) {
			$content .= '<p style="color: green;font-weight:bold;">Follow me on <a href="https://twitter.com/pixolin">Twitter</a></p>';
			return $content;
	}

}
