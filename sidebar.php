<!-- Verificar se existe algum widget ativo na sidebar -->
<?php
$sidebar_name = tipo_sidebar();

if( is_active_sidebar( $sidebar_name )) dynamic_sidebar( $sidebar_name );
else echo '<p>Não há widgets ativos! insira os widgets através do wp-admin.</p>'
 ?>