{{-- Function for View--}}

@php

    if (!function_exists('setTitle')) : function setTitle($page_name)
    {
        // echo $page_name
        $admin_name = 'Alanti Business Inteligence';

        if ($page_name === 'dashboard') :
            echo 'Alanti Business Inteligence';
        elseif ($page_name === 'Pagina Inicial') :
        echo 'Administração' . $admin_name;
        endif;
    }
endif
@endphp
