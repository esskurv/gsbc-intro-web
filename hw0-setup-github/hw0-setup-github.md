# Homework 0: Set up GitHub

**Git** is a tool for tracking changes in files, often with text-based source code files. It is often used for *source control*, tracking the change in source code files for the duration of a project. It allows you to see every change to the project, help you work with others, and allow you to have several branches of code.

[Link to Git book](https://git-scm.com/book/en/v2)

**GitHub** is a place for hosting Git repositories. For this course, you will need to create an account. After you have created an account, you will need to create a **public** repository called `gsbc-intro-web`. After you have created this account, you will need to enable Git Pages so you can use GitHub like a web server.

You probably do not have the program `git` installed on your computer. Here are some links for learning how to install git so you can use it with your command line.

* [https://git-scm.com]

## Windows

Use the Windows installer from the Git SCM website.

## macOS

First, install `brew`:

```bash
$ /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```
Then install `git`

```bash
$ brew install git
```

## Linux

For Debian derived systems using `apt`:

```bash
$ sudo apt install git
```

Or for Fedora derived systems using `yum`:

```bash
$ sudo yum install git
```

## Clone your repository

First, let's make a directory to store our source code files:

```bash
mkdir github
cd github
```

On the command line, run the following command:

```bash
git clone https://github.com/yourusername/gsbc-intro-web
```

From your `home` directory, you should have a path:

```
cd gsbc-intro-web
ls
```

You should see the `README.md` file that was initially created with your GitHub repository.

## Make changes to the README.md file

Let's make a change using the `Vi` text editor.

```bash
vi README.md
```

Press the letter `i` to enter INSERT mode. Use the arrow keys to the end of the file and press `<ENTER>` to add a new line. Add a sentence to your file. Press `<ESC>` to exit INSERT mode. Type `:wq` to write the changes to your file and quit `Vi`.

Now, check if there are changes to your git repository by using the `git status` command.

```bash
git status
```

## Check in the work to the respository

The following commands will add the README.md file to the list of files we want to commit.

```bash
git add README.md
git commit -m "Update README"
```

Now if we run `git status`, we will see that there are changes which we can push.

```bash
git status
git push
```

This will now send our work back to GitHub. If we got back to the GitHub repository website, we will see the changes applied when we refresh the page. Cool, huh?
