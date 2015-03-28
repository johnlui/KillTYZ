# *KillTYZ* 干掉拖延症
![KillTYZ](https://raw.githubusercontent.com/johnlui/KillTYZ/master/public/images/logo.png)

KillTYZ 是一个基于 [TinyLara](http://tinylara.com) 的私人 Todo-List 应用，是 TinyLara 的第一个官方示例项目。

在线示例：http://killtyz.com/

## 安装

```
git clone https://github.com/johnlui/KillTYZ.git ./killtyz
cd killtyz
composer update
```
把网站根目录指向 `killtyz/public`。编辑 `config/config.php` 中的

```
'base_url' => 'ooxx.com'
```

为正确的值，打开页面！

## 开发目的

通过构建一个简单应用，来检验 TinyLara 的实用性，并在构建 KillTYZ 的过程中不断完善 TinyLara 框架。

## 功能计划

### 已有功能

1. 2014-11-01 01:08:21 完成基本 Todo-List 功能。
2. 2014-11-02 00:28:30 浏览器本地存储 实现

### 计划功能

1. ~~浏览器本地存储~~
2. 服务端数据持久化
3. 多用户支持（待定）

## License

KillTYZ 采用 [MIT](http://opensource.org/licenses/MIT) 协议分发，衍生项目除了必须采用 MIT 协议之外无任何限制。
