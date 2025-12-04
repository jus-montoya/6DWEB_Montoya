
                    <!-- Season column -->
                    <td style = "<?php

                    if(strpos($perfume['season'], "Summer") !== false || (strpos($perfume['season'], "warm") !== false)) {
                        echo "color:#ffb74d;";
                    }

                    elseif(strpos($perfume['season'], "Winter") !== false || (strpos($perfume['season'], "Cooler") !== false)) {
                        echo "color:#64b5f6;";
                    }?>">
                    
                    <?= $perfume['season']; ?>
                    
                    </td>

                    <!-- Occasion column -->
                    <td style = "<?php
                    if(strpos($perfume['occasion'], "romantic") !== false) {
                        echo "color:pink;"; }
                    ?>">
                        <?= $perfume['occasion']; ?>
                    </td>
