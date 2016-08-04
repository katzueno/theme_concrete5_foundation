# concrete5 starter theme: Kiso for Foundation

The basic starter theme of concrete5

## How to install

Some of the file is not included in the repo.
You must run the following commands to install the rest of files.

```
cd [path/to/concrete5]/package/theme_kiso_foundation/theme/kiso_foundation/
npm install
bower install
```

## The Folder structure.

Mainly, you want to work on `theme/kiso_foundation`

## While modifying SCSS file

If you want to modify SCSS file, run the following command to compile the SCSS to CSS

```
cd /path/to/directory
npm start
```

Gulp will keep running and watching the changes of your SCSS file. Press `ctlr + c` to abort the program.

## Requirement

You need to install Node.js and Bower.

### NPM install

You need shell program such as bash. Visit http://nodejs.org/ and install npm.

### Install Bower

Install Bower using the following command.

```
npm install -g bower
```