<?php
echo '<div id="minidebughp" style="padding:5%; padding-top:2%; border: 3px solid #2f3542; font-family: Arial, Helvetica, sans-serif; background:#f1f2f6;"><center><h2>minidebug.php</h2></center>';

echo '<pre class="minidebugphp" style="background:#dfe4ea; color: #2f3542; border-right: 6px solid #747d8c;"><mark style="background-color: #eccc68;">get_defined_vars()</mark>';
print_r(get_defined_vars());
echo '</pre>';

echo '<pre class="minidebugphp" style="background:#ced6e0; color: #2f3542; border-left: 6px solid #a4b0be;"><mark style="background-color: #eccc68;">get_defined_constants()</mark>';
print_r(get_defined_constants());
echo '</pre>';

echo '<pre class="minidebugphp" style="background:#dfe4ea; color: #2f3542; border-right: 6px solid #747d8c;"><mark style="background-color: #eccc68;">get_defined_functions()</mark>';
print_r(get_defined_functions());
echo '</pre>';


echo '<pre class="minidebugphp" style="background:#ced6e0; color: #2f3542; border-left: 6px solid #a4b0be;"><mark style="background-color: #eccc68;">get_declared_classes()</mark>';
print_r(get_declared_classes());
echo '</pre>';

echo '</div>';