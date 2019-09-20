# Twig Functions and Filters

Theme EMMThemeOgi contains custom Twig functions and filters that can help you making SEO and advertising links unique.

## Documentation

### Functions

#### extendedTitleName(item)

Displays title name in more SEO friendly format. Returns string.
```
{{ extendedTitleName(["id" => 148926, "name" => "Burning Man", "episodeParent" => ["id"=> 10055, "name" => "Malcolm in the Middle"], "season" => 7, "episode" => 1]) }}
//Malcolm in the Middle S07E01
//There is episode with name "Burning Man" but more SEO friendly is display it under TV Series name like "Malcolm in the Middle S07E01"

{{ extendedTitleName(["id" => 10055, "name" => "Malcolm in the Middle", "episodeParent" => NULL, "season" => NULL, "episode" => NULL]) }}
//Malcolm in the Middle
//If it is not episode, eg. Movie, TV Series it returns its name
```

## Examples
See examples how it could look like when you use functions and filters in Twig template together with variables.
```
&#127902; Watch/download {{ extendedTitleName(item) }} {{ renderIfEverythingIsNotEmpty('&#11088;%%s/%%s', [item.rating.value, item.rating.scale])|delimiter }} {{ arraySlice('3', item.genres, 'name')|comma|delimiter }} {{ trimOnWord('24', item.description) }}
HD Stream &#128250; {{ extendedTitleName(item)|delimiter }} {{ item.releasedYear }}
https://google.com?q={{ ('Download ' ~ extendedTitleName(item))|url_encode }}
```