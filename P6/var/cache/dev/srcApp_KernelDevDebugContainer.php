<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEJKMxE0\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEJKMxE0/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEJKMxE0.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEJKMxE0\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerEJKMxE0\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'EJKMxE0',
    'container.build_id' => '209fdc6d',
    'container.build_time' => 1569109249,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEJKMxE0');
