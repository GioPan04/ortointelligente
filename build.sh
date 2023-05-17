#!/bin/sh

OUTPUT=ortointelligente.zip

if [ -e "$OUTPUT" ]; then
  rm "$OUTPUT"
fi

cd src
zip -r "../$OUTPUT" . 
