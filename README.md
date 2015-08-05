## HashIds Bundle for Symfony2 - http://hashids.org/php/
Symfony2 bundle for accessing the HashIds library to generate short unique ids from integers

"Hashids is a small open-source library that generates short, unique, non-sequential ids from numbers.
It converts numbers like 347 into strings like “yr8”, or array of numbers like [27, 986] into “3kTMd”.
You can also decode those ids back. This is useful in bundling several parameters into one or simply using them as short UIDs."

### 1. Include in composer.json
```
"jasonbradley/hash-ids-bundle": "dev-master"
```

### 2. Include in AppKernel.php
```
new JasonBradley\HashIdsBundle\JasonBradleyHashIdsBundle()
```

### 3. Bundle Configuration example (config.yml)
```
jason_bradley_hash_ids:
    salt: abc123
    min_hash_length: 25
    alphabet: "abcdefghijklmnopqrstuvwxyz"
```

### To use the service
```
$hash = $this->get('hash_ids')
            ->encode(123);

$numbers = $this->get('hash_ids')
    ->decode($hash);
```
