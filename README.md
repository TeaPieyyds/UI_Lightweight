# 🎨 UI_Lightweight_Tea

**Material 3 Expressive UI Canvas** - 轻量级、移动优先的界面设计工具

在浏览器中绘制 Material 3 Expressive 界面，生成 AI 编码提示词，直接部署到 PHP 服务器。

[![Demo](https://img.shields.io/badge/demo-lnkiai.github.io-6750A4?logo=googlechrome&logoColor=white)](https://lnkiai.github.io/m3e-canvas/)
[![License: MIT](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Next.js](https://img.shields.io/badge/Next.js-16-black?logo=nextdotjs)](https://nextjs.org)
[![React](https://img.shields.io/badge/React-19-20232a?logo=react&logoColor=61DAFB)](https://react.dev)
[![Mobile Friendly](https://img.shields.io/badge/Mobile-适配-EADDFF)]

---

## ✨ 功能特性

### 🎯 核心能力
- **拖拽式设计** - 按钮、图标按钮、FAB、导航栏、卡片、列表、对话框等所有 M3 组件
- **磁性连接** - 靠近的按钮/列表项自动合并成组
- **真实 M3 加载动画** - 波浪/进度指示器
- **手机 & 桌面双尺寸** - 同一设计同时适配手机(412×892)和桌面(1280×800)
- **Tap 导航** - 为组件指定目标屏幕和过渡动画

### 📱 移动端优化（本次改造）
- ✅ **完全适配手机端** - 响应式布局，触摸友好
- ✅ **安全区域支持** - 完美处理刘海屏、底部横条
- ✅ **视口高度修复** - 解决移动端 dvh/vh 问题
- ✅ **触摸优化** - 48px 最小触摸目标，防误触
- ✅ **In-app 浏览器兼容** - X、Instagram、LINE、微信等
- ✅ **PWA 就绪** - 可添加到主屏幕离线使用

### 🚀 部署选项
- **Next.js 静态导出** - `npm run build` 生成 `out/` 目录
- **PHP 服务器** - 直接部署到任何支持 PHP 的服务器
- **GitHub Pages** - 免费静态托管
- **Vercel/Netlify** - 一键部署
- **Docker** - 容器化部署

---

## 📦 快速开始

### 本地开发

```bash
# 1. 克隆仓库
git clone https://github.com/TeaPieyyds/UI_Lightweight_Tea.git
cd UI_Lightweight_Tea

# 2. 安装依赖
npm install

# 3. 启动开发服务器
npm run dev

# 4. 打开浏览器访问 http://localhost:3000
```

### 构建生产版本

```bash
# 构建静态文件
npm run build

# 输出目录: ./out/
# 包含完整的 Next.js 静态导出
```

### PHP 服务器部署

1. **上传文件**
   ```bash
   # 将 out/ 目录内容上传到 PHP 服务器
   scp -r out/* user@your-server:/var/www/html/
   ```

2. **或者直接部署整个项目**
   ```bash
   # 确保服务器有 PHP 8.0+
   # 访问 index.php 或 deploy.php
   ```

3. **Apache 配置**
   ```apache
   DocumentRoot /var/www/html/out
   <Directory /var/www/html/out>
       AllowOverride All
       Require all granted
   </Directory>
   ```

### Docker 部署

```bash
# 构建镜像
docker build -t ui-lightweight-tea .

# 运行容器
docker run -d -p 8080:80 ui-lightweight-tea

# 访问 http://localhost:8080
```

---

## 📱 移动端使用说明

### 最佳实践
1. **使用现代浏览器** - Chrome、Safari、Firefox 最新版
2. **旋转屏幕** - 自动适配横屏/竖屏
3. **添加到主屏幕** - 支持 PWA，离线可用
4. **全屏浏览** - 隐藏地址栏，沉浸式体验

### 触摸手势
- **点击** - 选择组件
- **长按** - 打开属性面板
- **拖拽** - 移动组件位置
- **双指缩放** - 缩放画布
- **滑动** - 导航栏切换

---

## 🛠️ 技术栈

| 技术 | 用途 |
|------|------|
| Next.js 16 | React 框架，静态导出 |
| React 19 | UI 库 |
| TypeScript | 类型安全 |
| Tailwind CSS v4 | 原子化 CSS |
| Motion | 动画库 |
| html-to-image | 截图导出 |

---

## 📂 项目结构

```
UI_Lightweight_Tea/
├── app/                    # Next.js App Router
│   ├── globals.css        # 全局样式
│   ├── globals.mobile.css # 移动端优化样式
│   ├── layout.tsx         # 根布局
│   └── page.tsx           # 主页面
├── components/             # React 组件
│   ├── M3Node.tsx         # M3 组件节点
│   ├── Mobile.tsx         # 移动端适配器
│   ├── Inspector.tsx      # 属性面板
│   ├── Toolbar.tsx        # 工具栏
│   └── ...
├── lib/                    # 工具函数
│   ├── tokens.ts          # 设计令牌
│   ├── prompt.ts          # 提示词生成
│   └── ...
├── public/                 # 静态资源
├── out/                    # 构建输出 (gitignore)
├── deploy.php             # PHP 部署入口
├── Dockerfile             # Docker 配置
├── .htaccess              # Apache 配置
└── vercel.json            # Vercel 配置
```

---

## 🔧 配置说明

### 环境变量

创建 `.env.local` 文件：

```bash
# GitHub Pages 部署路径
NEXT_PUBLIC_BASE_PATH=/m3e-canvas

# 自定义域名
NEXT_PUBLIC_SITE_ORIGIN=https://your-domain.com

# AI API Keys (可选)
OPENAI_API_KEY=sk-xxx
ANTHROPIC_API_KEY=sk-ant-xxx
```

### PHP 配置

在 `deploy.php` 中可修改：
- 服务器根目录
- 缓存策略
- 错误日志路径

---

## 🌐 在线 Demo

立即体验：https://lnkiai.github.io/m3e-canvas/

---

## 📄 许可证

MIT License - 见 [LICENSE](LICENSE) 文件

---

## 🤝 贡献

欢迎贡献！请阅读 [CONTRIBUTING.md](CONTRIBUTING.md)

---

## 📧 联系方式

- GitHub: [TeaPieyyds](https://github.com/TeaPieyyds)
- 原项目: [lnkiai/m3e-canvas](https://github.com/lnkiai/m3e-canvas)

---

<p align="center">
  Made with ❤️ by TeaPieyyds
</p>
