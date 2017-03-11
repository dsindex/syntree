### Modification

* replace brackets to parentheses for visualizing the Sejong Tree Bank.
* replace '_' to '-' for movement arrows
* phrase structure tree(constituent tree)
```
; 가계부의 틀이 달라지고 있다.
(S  (NP_SBJ (NP_MOD 가계부/NNG + 의/JKG)
        (NP_SBJ 틀/NNG + 이/JKS))
    (VP (VP 달라지/VV + 고/EC)
        (VP 있/VX + 다/EF + ./SF)))
```
![sampe view](https://raw.githubusercontent.com/dsindex/blog/master/images/pstree.png)

### README of original source

The goal of this project is to create a browser-based, fully local syntax tree generator, for drawing trees as you might find in an introductory linguistics course. Here are a few main features:

* Designed to be easy to use.
* Draws as you type for real-time feedback.
* Basic support for movement arrows using markup.
* Supports Unicode insofar as the browser it is running on does.
* Adjustable appearance.
* Linkable, i.e. parses the query string.

For more details, see the [wiki](https://github.com/mshang/syntree/wiki).

The app can be found at <http://mshang.ca/syntree/>. If you publish a paper with a tree drawn by this app, I would appreciate it if you sent me a link to your paper.

By the way, here are a few great alternatives:

* [phpSyntaxTree](http://ironcreek.net/phpsyntaxtree/)
* [RSyntaxTree](http://www.yohasebe.com/rsyntaxtree/)
