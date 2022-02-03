# 未知下载站

**欢迎使用未知下载站！这是本程序的README.MD哦！**

### DEMO

网页链接：https://share.llilii.cn

#### 注意事项：

1.DEMO中的下载节点选择页面在开源版本中是**不存在**的（因为如果要加这个页面，就要写个后台用于管理下载节点）。

2.开源版本下载是**没有人机验证**的（因为我的人机验证时纯nginx实现的，你们部署起来可能比较麻烦）。

### 联系作者

作者邮箱：i#mr-wu.top（把#替换为@）

作者博客：https://www.wunote.cn

### 本项目的官方Git仓库

内网仓库：https://git.mr-wu.top/UnknownO/download-station

Github仓库：https://github.com/unknown-o/download-station

Gitee仓库：https://gitee.com/mr-wu-code/download-station

### 这是一个非常简洁的说明

由一条咸鱼开发的一款非常简陋的文件下载站

### 程序特性

1.使用**MDUI**开发，超级好看的**扁平化**设计

### 安装教程

#### 如果你是宝塔用户

你可以直接从**应用商城**-->**一键部署**-->**搜索**-->**未知下载站**-->**一键部署**。即可**一键**部署到您的宝塔面板上。

#### 如果你要手动部署

您可以从官方仓库中**下载源码**或最新发行版，然后在您的站点解压，并且确保**index.php**在您的**站点根目录**，即可开始使用。

如果您要开启伪静态（目前**只**写了nginx的伪静态规则），请导入根目录的**nginx.rewrite**到您的站点配置文件中，并且修改**config.php**中的**rewrite**变量为true

### 注意事项

#### 伪静态规则仅支持Nginx

因为懒得装**Apache**环境，所以目前伪静态规则仅写了**Nginx**的

所以....如果有大佬的话，**欢迎**帮忙写哦（写完可以提交个PR，2333）

#### 下载的文件不要过大

本下载站是通过php提供下载的，由于php**存在超时时间**，如果下载文件**过大**可能导致**耗时过长**导致php**超时停止**

##### 如何解决此问题？

设置php超时时间长一点，或**不设置**php超时（具体**操作方法**您可以**百度**）

#### 可以删除的文件

如果你**安装完成**后，您**可以删除**以下文件

**auto_install.json**（宝塔自动部署文件）

**nginx.rewrite**（nginx伪静态规则）

**readme.md**（本下载站简单介绍文件）

### 开源许可证

本项目采用**GNU General Public License (GPL) V3**许可证开源

如果**不同意**此许可证，请**不要**使用本程序

### 如何对本项目贡献

有很多方法可以帮助项目：**记录bug**、**提交PR请求**、**报告问题**和**提出优秀的建议**。**即使**您对存储库拥有**推送权限**，也应该在需要时创建**个人fork**并在那里创建功能分支。这样可以保持主存储库的**干净**，并且您的个人工作流程不受影响。我们也对你对这个项目未来的反馈感兴趣。您可以通过**issue** **tracker**提交建议或功能请求。为了使这个过程更有效，我们要求这些包括更多的信息来帮助更清楚地**定义**它们。

There are many ways to contribute to the project: **logging bugs**, **submitting pull requests**, **reporting issues**, and **creating suggestions**. **Even if** you have **push rights** on the repository, you should create a personal fork and create feature branches there when you need them. This keeps the main repository **clean**, and your personal workflow cruft out of sight. We're also interested in your feedback for the future of this project. You can submit a suggestion or feature request through the issue tracker. To make this process more effective, we're asking that these include more information to help **define** them more clearly.























