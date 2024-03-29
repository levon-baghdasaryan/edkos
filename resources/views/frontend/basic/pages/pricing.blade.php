@extends('frontend/basic/main')

@section('title', 'Pricing')
@section('bodyClass', 'plans-pricing')

@section('extra-styles')
    <link href="{{ asset('css/plans-pricing.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="plans-first-section">
    <div class="plans-first-content">
        <h1>Some Text</h1>
    </div>
</section>
<section class="plans-second-section">
    <div class="plans-second-content">
        <div class="plans-blocks">
            <h1>Starter</h1>
            <p class="plans-goals">For small business with big goals</p>
            <p class="plans-number">€15<span>/mo</span></p>
            <button class="plans-free-btn">Try It Free</button>
            <p class="plans-by-now"><span>or</span> Buy Now</p>
            <ul>
                <li><i class="far fa-check-circle"></i>All Lite Features</li>
                <li><i class="far fa-check-circle"></i>Unlimited proposals</li>
                <li><i class="far fa-check-circle"></i>Automated Recurring Invoices</li>
                <li><i class="far fa-check-circle"></i>Double Entry Accounting Reports</li>
                <li><i class="far fa-check-circle"></i>Scheduled Late Fees</li>
                <li><i class="far fa-check-circle"></i>Automated Late Payment Reminders</li>
                <li><i class="far fa-check-circle"></i>Client Retainers</li>
                <li><i class="far fa-check-circle"></i>Team Members (€10/person)</li>
                <li><i class="far fa-check-circle"></i>Advanced Payments (€20/mo)</li>
            </ul>
        </div>
        <div class="plans-blocks">
            <h1>GROWTH</h1>
            <p class="plans-goals">For growing businesses with dynamic teams</p>
            <p class="plans-number">€30<span>/mo</span></p>
            <button class="plans-free-btn">Try It Free</button>
            <p class="plans-by-now"><span>or</span> Buy Now</p>
            <ul>
                <li><i class="far fa-check-circle"></i>Unlimited + Customized Invoices</li>
                <li><i class="far fa-check-circle"></i>Unlimited Expense Entries</li>
                <li><i class="far fa-check-circle"></i>Accept Credit Card Payments Online</li>
                <li><i class="far fa-check-circle"></i>Accept ACH Bank Transfers Online</li>
                <li><i class="far fa-check-circle"></i>Automated Bank Import</li>
                <li><i class="far fa-check-circle"></i>Unlimited Time Tracking</li>
                <li><i class="far fa-check-circle"></i>Unlimited Estimates</li>
                <li><i class="far fa-check-circle"></i>Insightful Tax Time Reports</li>
                <li><i class="far fa-check-circle"></i>Custom functionality and workflows</li>
                <li><i class="far fa-check-circle"></i>with 200+ integrations</li>
                <li><i class="far fa-check-circle"></i>Team Members (€10/person)</li>
            </ul>
        </div>
        <div class="plans-blocks plans-blocks-pro">
            <h1>PRO</h1>
            <p class="plans-goals">For triving businesses that need custom service</p>
            <p class="plans-number">€50<span>/mo</span></p>
            <button class="plans-free-btn">Try It Free</button>
            <p class="plans-by-now"><span>or</span> Buy Now</p>
            <ul>
                <li><i class="far fa-check-circle"></i>A personal Account Manager</li>
                <li><i class="far fa-check-circle"></i>Customized training for you and your team</li>
                <li><i class="far fa-check-circle"></i>Super low credit card transaction rates</li>
                <li><i class="far fa-check-circle"></i>Easy QuickBooks and Xero integration</li>
            </ul>
        </div>
        <div class="plans-blocks">
            <h1>Self-Employed</h1>
            <p class="plans-goals">For the self-employed pro that's on the go</p>
            <p class="plans-number">€5<span>/mo</span></p>
            <button class="plans-free-btn">Try It Free</button>
            <p class="plans-by-now"><span>or</span> Buy Now</p>
            <ul>
                <li><i class="far fa-check-circle"></i>Unlimited + Customized Invoices</li>
                <li><i class="far fa-check-circle"></i>Unlimited Expense Entries</li>
                <li><i class="far fa-check-circle"></i>Accept Credit Card Payments Online</li>
                <li><i class="far fa-check-circle"></i>Accept ACH Bank Transfers Online</li>
                <li><i class="far fa-check-circle"></i>Automated Bank Import</li>
                <li><i class="far fa-check-circle"></i>Unlimited Time Tracking</li>
                <li><i class="far fa-check-circle"></i>Unlimited Estimates</li>
                <li><i class="far fa-check-circle"></i>Insightful Tax Time Reports</li>
                <li><i class="far fa-check-circle"></i>Custom functionality and workflows</li>
                <li><i class="far fa-check-circle"></i>with 200+ integrations</li>
                <li><i class="far fa-check-circle"></i>Team Members (€10/person)</li>
            </ul>
        </div>
    </div>
</section>
<section class="plans-secure-block">
    <div class="plans-secure-content">
        <div class="plans-secure">
            <div>
                <img src="{{ asset('assets/img/safe.svg') }}">
            </div>
            <h1>Safe and Secure</h1>
            <div class="line"></div>
            <p>
                EDKOS protects your personal information with industry
                standard SSL and encryption so your business is always
                safe and secure.
            </p>
        </div>
        <div class="plans-secure">
            <div>
                <img src="{{ asset('assets/img/day.svg') }}">
            </div>
            <h1>30-Day Guarantee</h1>
            <div class="line"></div>
            <p>
                Try EDKOS today, risk-free. Cancel your account within
                30 days and you’ll receive an automatic refund, down to
                the last penny.
            </p>
        </div>
    </div>
</section>
<section class="sixth-section">
    <div class="content">
        <div class="text-block">
            <p class="text-1">WE WORK WITH</p>
            <p class="text-2">2.640.057 </p>
            <p class="text-3">CUSTOMERS FROM ALL OVER THE WORLD</p>
        </div>
        <div class="sixth-block">
            <button class="save">Buy now and save</button>
            <button class="free">Start Free Trial</button>
            <div>By signing up, you agree to the Terms of Use
                and Privacy Policy.</div>
        </div>
    </div>
</section>
@endsection
