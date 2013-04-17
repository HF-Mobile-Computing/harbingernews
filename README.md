# Development
=============

This is the development branch of the Harbinger website.  The way this works is thus:

1. You want to make some changes to the site. Great! I want you to, too.But, we don't want to mess anything up, so you'll make these changes in a new, seperate branch, generated (branched off of) the current `development` branch
2. Make your changes. *Commit often and be specific in your commit messages*
3. Merge your working branch back into your local `development` branch. There is no need to push your working branch to Github - you don't want to see my unfinished work, so don't show me yours.
4. Make sure that you didn't break anything! Boot up the server on your local machine and poke around the things you changed. Does it all look good? Run `rspec` to check for any unforeseen errors. If everything passes, move onto the next step. If in doubt, ask a senior member of the group. If it's all good, push your local `development` branch to Github
5. Merge your local `development` branch into your local `master`. Re-check everything. Still looks good? Push to Github.

I know these steps seem tedious and long, but if you're good, you'll only need to run `rspec` one time to unsure that you're still in the green. It may take a little bit longer to do it this way, but it ensures that we don't mess up anything in a way that can't be fixed. The idea is that, god forbid you *wreck* something in the `development` branch in a way that no one can fix, we can always erase it completely and make a new one from the most recent `master`. Easy as [pie](http://weareoregon.org/wp-content/uploads/2012/11/Blueberry-Pie-from-Baked-Perfection.jpg)!
