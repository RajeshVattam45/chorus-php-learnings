<?php

echo "Some json formats <br>";

// Normal way to display json.
echo "{
      'name': 'Apple',
      'color': 200
      }
    ";

echo '<br>';

// JSON Array of Objects.
echo  "[
    {
        'name': 'Lion',
        'weight': 300
    },
    {
        'name': 'Tiger',
        'weight': 400
    }
    ]";

echo '<br>';

// Nested JSON Object.
echo "
{
    'company': 'Cognine',
    'Location': 'Hyderabad'
    'employees': [
      {
        'name': 'Alice',
        'role': 'Developer'
      },
      {
        'name': 'Article2',
        'role': 'Tester'
      }
    ]
  }
";

// JSON with Mixed Data Types.
echo "
  {
    'id': 12345,
    'name': 'Product A',
    'price': 99.99,
    'in_stock': true,
    'tags': ['electronics', 'gadget'],
    'details': {
      'weight': '1.5 kg',
      'color': 'Black'
    }
  }
";
  