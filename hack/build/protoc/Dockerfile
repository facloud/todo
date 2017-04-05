FROM ubuntu:16.04
# had to use Ubuntu due to lack of glibc library in Alpine.

# add binaries
COPY protoc /usr/local/bin
COPY grpc_php_plugin /usr/local/bin
COPY protoc-gen-go /usr/local/bin

# make directories
RUN mkdir -p /opt/todo/in /opt/todo/out
