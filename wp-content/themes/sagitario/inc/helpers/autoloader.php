<?php
/**
 * Autoloader file for theme
 * 
 * @package Sagitario
 */

namespace SAGITARIO\Inc\Helpers;

function autoloader( $resource = '' ) {
    $resource_path  = false;
    $namespace_root = 'SAGITARIO\\';
    $resource       = trim( $resource, '\\') ;
	//error_log('RESOURCE: ' . print_r($resource, true));
	
    if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
        // Not our namespace, bail out.
        return;
    }
	
    // Remove our root namespace.
    $resource = str_replace( $namespace_root, '', $resource );
	
    $path = explode(
		'\\',
        str_replace( '_', '-', strtolower( $resource ) )
    );
	//error_log('PATH: ' . print_r($path, true));
    
    /**
     * Time to determine which type of resource path it is,
     * so thet we can deduce the correct file path for it.
     */
    if ( empty( $path[0] ) || empty( $path[1] ) ) {
        return;
    }

    $directory = '';
    $file_name = '';

    if ( 'inc' === $path[0] ) {

        switch ( $path[1] ) {
            case 'traits':
                $directory = 'traits';
                $file_name = sprintf( 'trait-%s', trim( strtolower( $path[2] ) ) );
                break;
            
            case 'widgets':
            case 'blocks': // phpcs:ignore PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
                /**
                 * If there is a class name provided for specific directory then load that.
                 * otherwise find in inc/ directory.
                 */
                if ( ! empty( $path[2] ) ) {
                    $directory = sprintf( 'classes/%s', $path[1] );
                    $file_name = sprintf( 'class-%s', trim( strtolower( $path[2] ) ) );
                    break;
                }
            default:
                $directory = 'classes';
                $file_name = sprintf( 'class-%s', trim( strtolower( $path[1] ) ) );
                break;
        }

        $resource_path = sprintf( '%s/inc/%s/%s.php', untrailingslashit( SAGITARIO_DIR_PATH ), $directory, $file_name );
		//error_log('RESOURCE PATH: ' . print_r($resource_path, true));
        
    }

    /**
     * If $is_valid_file has 0 means valid path or 2 means the file path contains a Windows drive path.
     */
    $is_valid_file = validate_file( $resource_path );

    if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {
        // We already making sure that file exists and valid.
        require_once( $resource_path ); // phpcs:ignore
    }

}

spl_autoload_register( '\SAGITARIO\Inc\Helpers\autoloader' );