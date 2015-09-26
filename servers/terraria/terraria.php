<?php
			$status = new query();

			$response = $status->get_status("/status");

                        $Server = "Server Status: ";

                        $Offline = "Offline";

                        $Online = "Online";

                        $Blue = 'blue';

                        $Green = 'green';

                        $Red = 'red';

                        if (!$response) { echo '<div class="status" style="Color:'.$Blue.'">'.$Server.'</div>'; echo '<div class="output" style="Color:'.$Red.'">'.$Offline.'</div>'; }

                        else if ($response) { echo '<div class="status" style="color:'.$Blue.'">'.$Server.'</div>'; echo '<div class="output" style="Color:'.$Green.'">'.$Online.'</div>'; }
              	?>
