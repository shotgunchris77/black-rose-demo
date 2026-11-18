# Black Rose West Allis: GoDaddy Launch Guide

What's in this kit:

- `black-rose-theme.zip`: the website design, menu, photos and events calendar (a WordPress theme).
- `black-rose-setup.zip`: a one-time helper plugin. It creates the Home, Menu, Events and Visit pages, sets the home page, adds the NYE Party TBA event, turns on clean links (/menu/, /events/) and removes WordPress sample content.
- This guide.

## 1. Buy the right GoDaddy products

1. Buy the domain (for example blackrosewestallis.com). Do it in the account that will own the site long-term. Ideally that's the bar owner's account, or yours with them added as a delegate.
2. Buy **Managed Hosting for WordPress** (Basic is enough). Annual plans include a free domain, so you can buy both in one checkout.
   - Do **not** use GoDaddy "Website Builder" or "Airo" site builder. Those can't run a custom WordPress theme.
3. Turn on domain privacy and auto-renew for the domain.

## 2. Set up WordPress

1. GoDaddy > My Products > Managed Hosting for WordPress > **Set up**.
2. In the wizard, choose to start from scratch with **your own theme and builder**. Skip Airo, the AI builder and any starter themes.
3. GoDaddy gives the site a temporary address first. Build on that, then switch to the real domain in step 5.
4. Set the WordPress admin username and a strong password. Save them in your password manager, and turn on two-factor for the GoDaddy account.

## 3. Install the theme

1. In WordPress, go to Appearance > Themes > Add New > **Upload Theme**.
2. Choose `black-rose-theme.zip`, then Install Now, then **Activate**.
   - If the upload is rejected for size (about 7 MB), use GoDaddy > Settings > File Browser. Upload the zip to `/wp-content/themes/` and choose **Unarchive**, then activate it under Appearance > Themes.

## 4. Run the one-time setup

1. Go to Plugins > Add New > **Upload Plugin**.
2. Choose `black-rose-setup.zip`, then Install Now, then **Activate**.
3. A green "Black Rose Setup is done" notice appears. If it doesn't, reload the Plugins page once.
4. **Deactivate** and **Delete** the Black Rose Setup plugin. It's no longer needed.
5. Check the site on the temporary address: Home, Menu, Events and Visit on desktop and phone.

## 5. Connect the domain

1. GoDaddy > My Products > Managed Hosting for WordPress > Manage > **Settings** > Domains > Add > **New primary domain**.
2. Pick the domain you bought. If it's in the same GoDaddy account, DNS is set automatically.
   - If the domain is in a different account or at another registrar, set the A record to the IP address GoDaddy shows.
3. Turn on the **SSL certificate** in the same Settings page so the site loads as https.
4. DNS can take a few minutes to a few hours. When the domain loads the site, check that https shows a lock.

## 6. Final checks before you announce it

- Settings > General: the Site Title should read "Black Rose West Allis" (the setup plugin sets this). The time zone should be Chicago.
- Settings > Reading: leave "Discourage search engines" **unchecked** so Google can find the site.
- Click Instagram, Get Directions and every menu section on your phone.
- Confirm the hours and menu prices with the owners. The two items flagged earlier were the "House Wine" shots list and the hoppy beer prices.
- Optional: add the site link to the Instagram bio, and set up a free Google Business Profile with the same hours and address.

## Running the site after launch

- **Add an event:** go to Dashboard > Events > Add New. Fill in the date, start and end time and a tag, then Publish. It shows on the calendar and the home page automatically. Monday dates show as Closed.
- **Small text changes:** edit the page directly under Pages > Menu (or Home or Visit) > Edit.
- **Bigger updates (new menu, new photos):** send me the new menu photos. I'll give you a new `black-rose-theme.zip`.
  1. Upload it with Appearance > Themes > Add New > Upload Theme, then choose **Replace current with uploaded**.
  2. Upload and activate `black-rose-setup.zip` again to refresh the pages, then delete it.
  3. Note that this overwrites any text edits made directly on the Home, Menu, Events or Visit pages. Events are not affected.
- **Domain changes:** photos keep working if the site address changes, for example from GoDaddy's temporary address to the real domain.
- **Backups:** Managed WordPress includes automatic backups. Keep auto-updates on for WordPress.
- **Logins:** give the owners their own WordPress user (Users > Add New). Make it Editor for adding events, or Administrator if they want full control.
