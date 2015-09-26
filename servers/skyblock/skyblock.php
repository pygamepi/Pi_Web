<?php
                        $status = new MinecraftServerStatus();

                        $response = $status->getStatus('www.gnosisparadox.net','1.6.4','25565');

                        $Server = "Server Status: ";

                        $Offline = "Offline";

                        $Online = "Online";

                        $Blue = 'blue';

                        $Green = 'green';

                        $Red = 'red';

			if (!$response) { echo '<div class="status" style="Color:'.$Blue.'">'.$Server.'</div>'; echo '<div class="output" style="Color:'.$Red.'">'.$Offline.'</div>'; }

			else if ($response) { echo '<div class="status" style="color:'.$Blue.'">'.$Server.'</div>'; echo '<div class="output" style="Color:'.$Green.'">'.$Online.'</div>'; }

              ?>
