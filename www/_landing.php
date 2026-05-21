<style>
/* Landing visuals — inline to dodge the un-versioned style.css cache */
.lp-shot { display:block; max-width:900px; width:100%; margin:2.75rem auto 0; border-radius:12px; border:1px solid rgba(255,255,255,.14); box-shadow:0 18px 50px rgba(0,0,0,.45); }
.lp-section-head { text-align:center; padding:3rem 1.5rem .5rem; }
.lp-section-head h2 { font-size:1.6rem; margin-bottom:.5rem; }
.lp-section-head p { color:#64748b; }
.lp-screens { display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.5rem; max-width:960px; margin:1.5rem auto 0; padding:0 1.5rem; }
.lp-screens figure { margin:0; }
.lp-screens img { width:100%; height:auto; border-radius:10px; border:1px solid var(--border,#e2e8f0); box-shadow:0 8px 24px rgba(0,0,0,.12); display:block; }
.lp-screens figcaption { text-align:center; font-size:.85rem; color:#64748b; margin-top:.6rem; }
</style>
<!-- ── SaaS-style marketing landing page for visitors ── -->
<div class="hero">
    <?php $_lp_banner = get_setting('header_banner_path', ''); if ($_lp_banner): ?>
    <img src="<?= htmlspecialchars($_lp_banner) ?>" alt="<?= htmlspecialchars(get_setting('site_name', 'Game Night')) ?>" style="max-width:400px;width:90%;margin-bottom:1.5rem">
    <?php endif; ?>
    <h1>Your Game Nights,<br>Organized.</h1>
    <p>The all-in-one platform for organizing leagues, scheduling game nights, managing RSVPs, running poker tournaments, and keeping your crew in the loop.</p>
    <div class="cta-group">
        <?php if (get_setting('allow_registration', '1') === '1'): ?>
        <a href="/register.php" class="btn btn-primary" style="padding:.65rem 2rem;font-size:1rem">Get Started Free</a>
        <?php endif; ?>
        <a href="/login.php" class="btn btn-outline" style="padding:.65rem 2rem;font-size:1rem">Sign In</a>
    </div>
    <img class="lp-shot" src="/img/help/timer-running.png" alt="GameNight tournament timer showing the current blind level and a large countdown clock" loading="lazy">
</div>

<div class="lp-section-head">
    <h2>Everything you need to run game night</h2>
    <p>From the first invite to the final hand.</p>
</div>
<div class="feature-grid">
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#127942;</div>
        <h3>Leagues</h3>
        <p>Create private leagues for your poker group, board game crew, or any circle. Build a roster, invite members by email or shareable link, and keep your events and contacts separate from other groups on the site.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128101;</div>
        <h3>Roster Management</h3>
        <p>Add members by name and email — even before they sign up. Import your whole roster via CSV. Pending contacts auto-link when they create an account, becoming full members instantly.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128197;</div>
        <h3>Event Scheduling</h3>
        <p>Create events scoped to your league or just your personal invite list. Set dates, times, and visibility. Only members and invitees see what's meant for them — no comingled calendars.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#9989;</div>
        <h3>RSVP Management</h3>
        <p>One-click RSVPs from email or text. See who's in, who's out, and who's on the fence. Automatic reminders keep your headcount accurate.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#127922;</div>
        <h3>Tournament Tools</h3>
        <p>Full-screen tournament timer with customizable blind structures, player check-in, table assignments, random seating, and payout calculators (ICM, Standard, Chip Chop).</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128202;</div>
        <h3>Player Stats &amp; Leaderboard</h3>
        <p>Track every player's games, wins, finish positions, and weighted scores across tournaments. Filter the leaderboard by date range to compare recent form against lifetime stats.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128241;</div>
        <h3>Walk-in QR Registration</h3>
        <p>Generate a QR code for public events. Guests scan, register in seconds, and get assigned a table and seat — no app download required.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128274;</div>
        <h3>Privacy &amp; Approval Controls</h3>
        <p>League events stay private to members. Join-request approval lets owners vet newcomers. Host approval mode queues walk-ins and self-signups for your review before they're on the list.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128176;</div>
        <h3>Multi-Table &amp; Payouts</h3>
        <p>Seat players across multiple tables, balance on the fly, protect button positions, break up tables as the field shrinks, and display live payout structures on the timer screen.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128276;</div>
        <h3>Smart Notifications</h3>
        <p>Email, SMS, and WhatsApp — each person picks their preference. Invites, RSVP confirmations, reminders, league requests, and approval alerts all routed automatically.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128227;</div>
        <h3>Posts &amp; Comments</h3>
        <p>Share announcements, pin important updates, and let your group discuss. Rich-text editor, comment threads, and a pinned-post feed on the home page.</p>
    </div>
    <div class="feature-card">
        <div class="icon" aria-hidden="true">&#128268;</div>
        <h3>WordPress &amp; API</h3>
        <p>Got a WordPress site for your league? Drop in our <strong>GameNight League</strong> plugin to render events, posts, roster, rules, and RSVP forms as shortcodes anywhere on your site. On a different stack? The same data is one bearer-auth REST call away — read-scope keys for display, write-scope keys let your site mint new accounts.</p>
    </div>
</div>

<div class="lp-section-head" style="padding-bottom:0">
    <h2>See it in action</h2>
</div>
<div class="lp-screens">
    <figure>
        <img src="/img/help/event-create.png" alt="The Add Event dialog for scheduling a game night" loading="lazy">
        <figcaption>Schedule an event</figcaption>
    </figure>
    <figure>
        <img src="/img/help/checkin-start.png" alt="The check-in dashboard with players, tables, and prize pool" loading="lazy">
        <figcaption>Check players in</figcaption>
    </figure>
    <figure>
        <img src="/img/help/event-rsvps.png" alt="An event invite list showing yes, no, and maybe RSVPs" loading="lazy">
        <figcaption>Track RSVPs</figcaption>
    </figure>
</div>

<div style="text-align:center;padding:2rem 1.5rem .5rem">
    <h2 style="font-size:1.6rem;margin-bottom:.5rem">How it works</h2>
    <p style="color:#64748b;margin-bottom:1.5rem">New here? Pick the guide that fits.</p>
</div>
<div class="feature-grid" style="max-width:760px;margin:0 auto">
    <a href="/help-hosts.php" class="feature-card" style="text-decoration:none;color:inherit;display:block">
        <div class="icon" aria-hidden="true">&#127922;</div>
        <h3>Hosting a game night?</h3>
        <p>Quick-start guide for hosts: build your league, schedule an event, invite people, and run game night. A step-by-step walkthrough with screenshots.</p>
    </a>
    <a href="/help-guests.php" class="feature-card" style="text-decoration:none;color:inherit;display:block">
        <div class="icon" aria-hidden="true">&#128231;</div>
        <h3>Got an invite?</h3>
        <p>Quick-start guide for guests: how RSVP links work, walk-in QR codes, and what you get with a free account.</p>
    </a>
</div>

<div style="text-align:center;padding:3rem 1.5rem 4rem">
    <p style="color:#64748b;font-size:1rem;margin-bottom:1.5rem">Ready to level up your game nights?</p>
    <div class="cta-group">
        <?php if (get_setting('allow_registration', '1') === '1'): ?>
        <a href="/register.php" class="btn btn-primary" style="padding:.65rem 2rem;font-size:1rem">Create Your Free Account</a>
        <?php else: ?>
        <a href="/login.php" class="btn btn-primary" style="padding:.65rem 2rem;font-size:1rem">Sign In</a>
        <?php endif; ?>
    </div>
</div>
