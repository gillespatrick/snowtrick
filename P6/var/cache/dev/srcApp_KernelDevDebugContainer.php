<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGURPh1h\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGURPh1h/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGURPh1h.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGURPh1h\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGURPh1h\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GURPh1h',
    'container.build_id' => 'b5f39073',
    'container.build_time' => 1577310875,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGURPh1h');
