# Demo Plugin — WP Engine Deploy

A dummy WordPress plugin that auto-deploys to WP Engine via GitHub Actions.

## 🚀 How it works

Every push to `main` triggers `.github/workflows/deploy.yml`, which uses the
official [WP Engine GitHub Action](https://github.com/wpengine/github-action-wpe-site-deploy)
to rsync `wp-content/` directly to your WP Engine environment.

## ⚙️ Setup (one-time)

1. **Generate an SSH key pair:**
   ```bash
   ssh-keygen -t ed25519 -C "github-deploy" -f wpengine_deploy_key
   ```

2. **Add the public key to WP Engine:**
   WP Engine User Portal → SSH Keys → paste `wpengine_deploy_key.pub`

3. **Add the private key to GitHub:**
   Repo → Settings → Secrets and variables → Actions
   New secret: `WPE_SSHG_KEY_PRIVATE` = contents of `wpengine_deploy_key`

4. **Set your install name** in `.github/workflows/deploy.yml`:
   ```yaml
   WPE_ENV: your-wpengine-install-name
   ```

5. Push to `main` — watch the Actions tab deploy live ✅

## 🧪 Test the plugin

After deploy, activate **Demo Plugin** in WP Admin → Plugins, then add this shortcode to any page:

```
[demo_hello]
```

You should see: **🚀 Hello from Demo Plugin! Deployed via GitHub → WP Engine.**
