<?php

function useComponent($componentName) {
    require ROOT.'/views/components/'.$componentName.'.php';
}