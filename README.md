## Webman() 基础插件开发

-  "php": ">=7.2",
-  "workerman/webman-framework": "^1.5.0",
-  "monolog/monolog": "^2.0",
-  "webman/console": "^1.3"


### 已开发插件目录

- [youloge.sqlite](https://github.com/youfeed/webman.sqlite) Sqlite3 文件夹映射表本地数据库
- [youloge.tool](https://github.com/youfeed/webman.tool) Tool 辅助函数工具箱





### 如何从零开发基础插件

#### 克隆项目
- `git clone https://github.com/youfeed/webman.git`
- `composer install`

#### 创建插件
- `php webman plugin:create --name=:github_NAME/:PLUGIN_NAME`

#### 导出插件
- `php webman plugin:export --name=:github_NAME/:PLUGIN_NAME`

### 发布插件(关键)
- `进入vendor/:github_NAME/:PLUGIN_NAME`正常开发插件
- `到Github创建一个放置插件的项目` 用于发布导出的插件
- 从文件夹进入`vendor/:github_NAME/:PLUGIN_NAME`并添加仓库到远程分支
- 如果你是用的`vsc`你就能从主仓库(本)识别子仓库正常提交即可