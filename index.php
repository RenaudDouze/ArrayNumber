<?php
class ArrayNumber {
    /**
     * Increment the array of digits as if it was a single number
     * Sample: [1, 2, 3] => [1, 2, 4] or [9, 9] => [1, 0, 0]
     * [1, 8, 9] => [1, 9, 0]
     * 
     * @param int[] $arrayNumber
     * 
     * @return int[]
     * 
    **/
    public static function increment(array $arrayNumber): array
    {
        // To avoid changing the original
        $newArrayNumber = $arrayNumber;
        
        $lastDigit = array_pop($newArrayNumber);

        if (null === $lastDigit) {
            return [1];
        }

        $newLastDigit = $lastDigit + 1;
        if (9 === $lastDigit) {
            $newArrayNumber = self::increment($newArrayNumber);

            // The 9 became a 0
            $newLastDigit = 0;       
        }

        $newArrayNumber[] = $newLastDigit;

        return $newArrayNumber;        
    }
}

if ([1, 2, 4] !== ArrayNumber::increment([1, 2, 3])) {
    throw new \RuntimeException('Ton code fonctionne pas');
}
if ([1, 9, 0] !== ArrayNumber::increment([1, 8, 9])) {
    throw new \RuntimeException('Ton code fonctionne pas');
}
if ([1, 0, 0] !== ArrayNumber::increment([9, 9])) {
    throw new \RuntimeException('Ton code fonctionne pas');
}
if ([1, 0, 1] !== ArrayNumber::increment([1, 0, 0])) {
    throw new \RuntimeException('Ton code fonctionne pas');
}
if ([1] !== ArrayNumber::increment([0])) {
    throw new \RuntimeException('Ton code fonctionne pas');
}
if ([1] !== ArrayNumber::increment([])) {
    throw new \RuntimeException('Ton code fonctionne pas');
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to PHPSandbox</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
Hello, everything is fine here
</body>
</html>