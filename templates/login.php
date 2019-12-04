<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/static/css/styler.css" type="text/css">
</head>
{% block body %}
<form action="/login/" method="POST">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Login</h1>
            </div>
            <div class="login-form">
                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="username" name="username">
                    <label class="login-field-icon fui-user" for="username"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field" value="" placeholder="password" name="password">
                    <label class="login-field-icon fui-lock" for="password"></label>
                </div>
                <input type="submit" value="Log in" class="btn btn-primary btn-large btn-block">
            </div>
        </div>
    </div>
</form>
{% endblock %}