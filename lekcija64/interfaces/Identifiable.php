<?php

/**
 * This file contains the Identifiable interface definition.
 */
namespace Project\Interfaces;

/**
 * The identifiable interface requires calasses to have identify method.
 */
interface Identifiable {
    /**
     * Returns the string that this entity uses to identity itself.
     */
    public function identify();
}
