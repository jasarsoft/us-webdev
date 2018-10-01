<?php
    final class Misc {
        public static function url($controller, $method, $text) {
            if ($_GET['Controller'] == $controller) {
                $activeClassSegment = ' class="active"';
            } else {
                $activeClassSegment = '';
            }
            echo '<a href="?Controller=' . $controller . '&Method=' . $method . '"' . $activeClassSegment . '>' . $text . '</a>';
        }
    }
