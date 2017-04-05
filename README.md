# Todo

Todo is an extremely over-engineered Todo application [1]. It's aim is to
enable me play around with gRPC and services (or microservices if you wish).

## Design

Todo is composed of a database service and a web frontend.

The database service communicates to a Redis database and exposes a useful API
to add, update, remove and list todo entries. It is written in Go.

The web frontend consumes the database service using gRPC and serves an
interactive web site. It is written in PHP, HTML, CSS and Javascript.

[1] Inspired by http://todomvc.com/.
