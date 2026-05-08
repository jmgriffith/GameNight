<?php
require_once __DIR__ . '/auth.php';

$site_name   = get_setting('site_name', 'Game Night');
$nav_active  = 'help';
$allow_reg   = get_setting('allow_registration', '1') === '1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host Guide &mdash; <?= htmlspecialchars($site_name) ?></title>
    <link rel="stylesheet" href="/style.css">
    <style>
        .help-wrap { max-width: 760px; margin: 2rem auto 4rem; padding: 0 1.5rem; }
        .help-wrap h1 { font-size: 2rem; margin-bottom: .5rem; }
        .help-wrap .subtitle { color: #64748b; margin-bottom: 2.5rem; font-size: 1.05rem; }
        .help-step { margin-bottom: 2.5rem; }
        .help-step h2 { font-size: 1.35rem; margin: 0 0 .75rem; display: flex; align-items: center; gap: .6rem; }
        .help-step .step-num {
            display: inline-flex; align-items: center; justify-content: center;
            width: 32px; height: 32px; border-radius: 50%;
            background: var(--accent, #2563eb); color: #fff;
            font-size: .95rem; font-weight: 600; flex-shrink: 0;
        }
        .help-step p { margin: .5rem 0; line-height: 1.6; color: #334155; }
        .help-step ul { margin: .5rem 0 .5rem 1.25rem; line-height: 1.6; color: #334155; }
        .help-step .hint {
            background: #f1f5f9; border-left: 3px solid #94a3b8;
            padding: .75rem 1rem; margin: .75rem 0; font-size: .92rem; color: #475569;
            border-radius: 4px;
        }
        .help-step img.help-shot {
            max-width: 100%; height: auto; border: 1px solid #e2e8f0; border-radius: 6px;
            margin: .75rem 0; display: block;
        }
        .help-cta {
            text-align: center; padding: 2.5rem 1rem;
            background: #f8fafc; border-radius: 8px; margin-top: 2rem;
        }
        .help-cta p { color: #475569; margin-bottom: 1.25rem; }
        .help-back { display: inline-block; margin-bottom: 1rem; color: #64748b; text-decoration: none; font-size: .9rem; }
        .help-back:hover { color: #2563eb; }
    </style>
</head>
<body>
<?php require __DIR__ . '/_nav.php'; ?>

<div class="help-wrap">
    <a href="/" class="help-back">&larr; Back to home</a>
    <h1>Host Guide</h1>
    <p class="subtitle">Get from zero to your first game night in about ten minutes.</p>

    <div class="help-step">
        <h2><span class="step-num">1</span> Set up your league</h2>
        <p>A <strong>league</strong> is your private group &mdash; your poker crew, board game club, or any circle. It scopes events, contacts, and stats so different groups don't see each other's stuff.</p>
        <p>From the home page, open <a href="/leagues.php"><strong>Leagues</strong></a> in the nav and create one. Give it a name and you're done.</p>
        <img class="help-shot" src="/img/help/leagues-create.png" alt="League creation form">
        <div class="hint">If you only run events with the same group, one league is all you need. Most hosts never make a second one.</div>
    </div>

    <div class="help-step">
        <h2><span class="step-num">2</span> Add your roster</h2>
        <p>Open <a href="/contacts.php"><strong>Contacts</strong></a> and add the people you'll invite. You can add them by name plus email or phone &mdash; <em>they don't need to sign up first</em>.</p>
        <ul>
            <li>Bulk-add by pasting a CSV of names and emails</li>
            <li>When a contact later creates an account on the site, they auto-link to the entry you already made &mdash; no double work</li>
        </ul>
        <img class="help-shot" src="/img/help/contacts-add.png" alt="Adding a contact">
    </div>

    <div class="help-step">
        <h2><span class="step-num">3</span> Schedule the event</h2>
        <p>Open the <a href="/calendar.php"><strong>Calendar</strong></a>, click the date you want, and fill out the form: title, time, description.</p>
        <p>Two visibility options worth knowing:</p>
        <ul>
            <li><strong>League event</strong> &mdash; everyone in your league can see it</li>
            <li><strong>Invite list only</strong> &mdash; only people you explicitly invite can see it, even other league members can't</li>
        </ul>
        <img class="help-shot" src="/img/help/event-create.png" alt="Event creation form">
    </div>

    <div class="help-step">
        <h2><span class="step-num">4</span> Invite people</h2>
        <p>On the event you just created, use the invite picker to add guests from your contacts (or type new emails/phones inline). Each invitee gets a one-click RSVP link delivered however they prefer &mdash; email, SMS, or WhatsApp.</p>
        <img class="help-shot" src="/img/help/event-invite.png" alt="Invite picker">
        <div class="hint">Each guest's preferred contact method comes from their own profile. You don't have to think about it &mdash; the site routes invites correctly per person.</div>
    </div>

    <div class="help-step">
        <h2><span class="step-num">5</span> Track RSVPs</h2>
        <p>Open the event and check the <strong>Guests</strong> tab. You'll see who said yes, no, maybe, or hasn't responded yet.</p>
        <p>Reminder messages go out automatically before the event &mdash; you don't need to nudge anyone manually.</p>
        <img class="help-shot" src="/img/help/event-rsvps.png" alt="Guest RSVP list">
    </div>

    <div class="help-step">
        <h2><span class="step-num">6</span> Run game night</h2>
        <p>On event day, two tools matter:</p>
        <ul>
            <li><strong>Check-in</strong> &mdash; mark guests as arrived, register walk-ins, and assign tables/seats. Open it from the event page or go straight to <a href="/checkin.php">/checkin.php</a>.</li>
            <li><strong>Tournament Timer</strong> &mdash; if you're running poker, the <a href="/timer.php">timer</a> handles blind levels, chip counts, and payout calculations. Cast it to a TV at the venue.</li>
        </ul>
        <p>That's it. After the event, results lock in and stats update automatically.</p>
    </div>

    <div class="help-cta">
        <p>Ready to host your first game night?</p>
        <div class="cta-group">
            <?php if ($allow_reg && !current_user()): ?>
            <a href="/register.php" class="btn btn-primary" style="padding:.65rem 2rem">Create Your Free Account</a>
            <?php elseif (!current_user()): ?>
            <a href="/login.php" class="btn btn-primary" style="padding:.65rem 2rem">Sign In</a>
            <?php else: ?>
            <a href="/leagues.php" class="btn btn-primary" style="padding:.65rem 2rem">Go to My Leagues</a>
            <?php endif; ?>
            <a href="/help-guests.php" class="btn btn-outline" style="padding:.65rem 2rem">Guest Guide</a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/_footer.php'; ?>
</body>
</html>
