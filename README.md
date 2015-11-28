# Morfy Likely Plugin

Morfy likely plugin.

To include Likely social share buttons on the page simply call `Likely::buttons`:

```
{Likely::buttons()}
```

You can also pass title or URL to share as first two arguments:

```
{Likely::buttons('Google, much likes and shares', 'http://google.com/')}
```

Or pass classes to configure size and theme for Likely:

```
{Likely::buttons('', '', 'likely-big')}
```