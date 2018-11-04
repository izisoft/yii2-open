<?php
namespace izi;

class BaseYii
{
    public static $classMap = [];
    
    public static $aliases = ['@yii' => __DIR__];
    
    public static $container;
    
    public static $app;
    
    
    
    public static function getAlias($alias, $throwException = true)
    {
        if (strncmp($alias, '@', 1)) {
            // not an alias
            return $alias;
        }
        
        $pos = strpos($alias, '/');
        $root = $pos === false ? $alias : substr($alias, 0, $pos);
        
        if (isset(static::$aliases[$root])) {
            if (is_string(static::$aliases[$root])) {
                return $pos === false ? static::$aliases[$root] : static::$aliases[$root] . substr($alias, $pos);
            }
            
            foreach (static::$aliases[$root] as $name => $path) {
                if (strpos($alias . '/', $name . '/') === 0) {
                    return $path . substr($alias, strlen($name));
                }
            }
        }
        
        if ($throwException) {
            throw new \InvalidArgumentException("Invalid path alias: $alias");
        }
        
        return false;
    }
    
    
}