## Quick start

- Clone github repository

```
$ git clone https://github.com/devhelp/FlowControlBundleSandbox.git
```

- Continue with standard [installation for Symfony project](http://symfony.com/doc/current/book/installation.html)

- Run webserver

```
$ php app/console server:run
```

- Run router:debug to check available router you can enter for example [first step of simple flow](http://localhost:8000/simple-flow/step-1)

```
$ php app/console router:debug
```

## Demo flows

### Simple flow

Standard flow, just page rendering, where last step is annotated with @DisableAutocommit

url: /simple-flow/{stepName}

### Form flow

Flow that consists of form submission. It allows you to check how does flow control behaves if this case and how
to achieve desired behavior

url: /form-flow/{stepName}

### Secured flow

Flow with login form. You will have a chance to take a look how flow control fits in Symfony security

url: /secure-flow/{stepName}

## Credits

Brought to you by : Devhelp.pl (http://devhelp.pl)
