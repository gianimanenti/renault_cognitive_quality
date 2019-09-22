


					<?php
					
					$old_settings = explode(',', ini_get('disable_functions'));
                   $new_settings = implode(',', array_diff($old_settings, ['shell_exec']));
                   ini_set('disable_functions', $new_settings);
  
  
					$f = shell_exec('python /customers/5/8/4/artificialx.com.br//httpd.www/projetos/alliance/watson_cam.py');
					
					echo $f;
					


					
?>
                  
                  