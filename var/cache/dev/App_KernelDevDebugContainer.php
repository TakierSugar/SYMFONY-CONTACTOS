<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKyE10Ku\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKyE10Ku/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKyE10Ku.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKyE10Ku\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKyE10Ku\App_KernelDevDebugContainer([
    'container.build_hash' => 'KyE10Ku',
    'container.build_id' => 'f3cdaa5c',
    'container.build_time' => 1666351964,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKyE10Ku');
