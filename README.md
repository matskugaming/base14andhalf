# Base14½

A quirky, non-standard base encoding system using 15 characters to encode binary data.

## What is Base14½?

Base14½ (technically implemented as Base15) is an unusual approach to data encoding that sits between traditional encoding systems like base8 (octal) and Base16 (hexadecimal).
The name "Base14½" is just the creators favourite number.

## Character Set

The Base14½ encoding uses the following 15 characters:

```
0123456789ABCX-
```

This character set was chosen for:
- Familiarity (using standard digits and few letters (got to have an X to make super cool))
- Avoiding visual confusion (no O vs 0 issues)
- URL-safety

## Features

- **Non-binary alignment:** Unlike Base16 or Base64, Base14½ doesn't align with binary bit boundaries, giving it unique encoding properties
- **Simple character set:** Uses only 15 familiar characters
- **URL and filename safe:** No special characters (i dont count "-" as special character)

## Usage

```php
require('base15.php');
// Encoding
$original = "Hello World!";
$encoded = base15_encode($original);
echo $encoded;  //Outputs: "14-6-C-2026B711X860989-05"

// Decoding
$decoded = base15_decode($encoded);
echo $decoded;  //Outputs: "Hello World!"
```
## Where to use
- Super cool verification code
- Annoy friends

## Requirements

The standard implementation requires the BC Math extension in PHP for handling "arbitrary-precision mathematics".

_no chatgpt was harmed while making parts of this readme.md_
