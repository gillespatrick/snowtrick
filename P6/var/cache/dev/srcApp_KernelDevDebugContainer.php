<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerApLehxw\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerApLehxw/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerApLehxw.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerApLehxw\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerApLehxw\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ApLehxw',
    'container.build_id' => '4af0d8c6',
    'container.build_time' => 1572924017,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerApLehxw');
