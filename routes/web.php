<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{
    return view( 'main' );
});

Route::post( '/', function()
{
    $input = Input::get( 'encoded' );

    if ( $input == null )
    {
        return view( 'main' );
    }

    $output = null;

    switch( Input::get( 'todo' ))
    {
        case 'json_decode':
            $output = print_r( json_decode( $input, true ), 1 );
            break;

        case 'mailgun_failure':
            $msg = json_decode( $input, true );

            foreach ( $msg as $idx => $item )
            {
                $output .= "[$idx] => ";

                if ( !is_array( $item ) && json_decode( $item, true ) !== null )
                {
                    $output .= print_r( json_decode( $item, true ), 1 );
                }
                else
                {
                    $output .= print_r( $item, 1 );
                }

                $output .= "\n";
            }

            break;

        case 'base64_decode':
            $output = print_r( base64_decode( $input ), 1 );
            break;
    }

    return view( 'main' )->with( 'encoded', $input )->with( 'output', $output );
});
