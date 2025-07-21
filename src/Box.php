<?php

namespace Myragon\Support;

/**
 * A simple wrapper class for arrays, providing object-oriented access
 * and default value handling for array elements.
 */
class Box
{
    /**
     * @var array<int|string,mixed> The wrapped data array.
     */
    protected array $data;

    /**
     * Box constructor.
     *
     * @param array<int|string,mixed> $data The array to wrap.
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Retrieves a value from the wrapped array by key.
     *
     * @param int|string $key     The key to retrieve.
     * @param mixed      $default The default value to return if the key does not exist.
     * @return mixed The value associated with the key, or the default value.
     */
    public function get(int|string $key, mixed $default = null): mixed
    {
        return $this->data[$key] ?? $default;
    }

    /**
     * Sets a value in the wrapped array by key.
     *
     * @param int|string $key   The key to set.
     * @param mixed      $value The value to set.
     * @return static Returns the current Box instance for chaining.
     */
    public function set(int|string $key, mixed $value): static
    {
        $this->data[$key] = $value;

        return $this;
    }

    /**
     * Clears all data from the wrapped array.
     *
     * @return static Returns the current Box instance for chaining.
     */
    public function flush(): static
    {
        $this->data = [];

        return $this;
    }

    /**
     * Replaces the entire wrapped array with new data.
     *
     * @param array<int|string,mixed> $data The new array data.
     *
     * @return static Returns the current Box instance for chaining.
     */
    public function replace(array $data): static
    {
        $this->data = $data;

        return $this;
    }
}
