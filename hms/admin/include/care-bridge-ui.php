<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
<style>
	:root {
		--ink: #0f1d2b;
		--muted: #5c6b7a;
		--primary: #0f8a7a;
		--primary-2: #0b6b5f;
		--surface: #ffffff;
		--shadow: 0 16px 36px rgba(15, 29, 43, 0.12);
		--shadow-soft: 0 10px 24px rgba(15, 29, 43, 0.08);
		--radius-lg: 18px;
		--radius-md: 12px;
	}

	body,
	#app {
		font-family: 'Manrope', sans-serif;
	}

	#page-title h1 {
		font-family: 'Playfair Display', serif;
		letter-spacing: .3px;
	}

	.care-panel {
		border-radius: var(--radius-lg);
		border: 1px solid rgba(15, 29, 43, .08);
		box-shadow: var(--shadow-soft);
		overflow: hidden;
	}

	.care-panel .panel-heading {
		background: linear-gradient(120deg, rgba(15, 138, 122, .08), rgba(58, 178, 131, .08));
		border-bottom: 1px solid rgba(15, 29, 43, .08);
		padding: 16px 20px;
	}

	.care-panel .panel-title {
		font-family: 'Playfair Display', serif;
		font-size: 20px;
	}

	.care-panel .panel-body {
		padding: 24px;
	}

	.care-form .form-control {
		border-radius: 12px;
		border: 1px solid rgba(15, 29, 43, .15);
		box-shadow: none;
	}

	.care-form .form-control:focus {
		border-color: var(--primary);
		box-shadow: 0 0 0 2px rgba(15, 138, 122, .15);
	}

	.care-form label {
		color: var(--muted);
		font-weight: 600;
	}

	.care-btn {
		background: var(--primary);
		color: #fff;
		border: none;
		padding: 10px 22px;
		border-radius: 999px;
		font-weight: 700;
		transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
	}

	.care-btn:hover,
	.care-btn:focus {
		background: var(--primary-2);
		color: #fff;
		transform: translateY(-2px);
		box-shadow: 0 12px 24px rgba(15, 29, 43, .15);
	}

	.care-table-wrap {
		background: var(--surface);
		border-radius: var(--radius-lg);
		border: 1px solid rgba(15, 29, 43, .08);
		box-shadow: var(--shadow-soft);
		padding: 16px;
	}

	.care-table thead th {
		color: var(--muted);
		font-weight: 700;
		border-bottom: 1px solid rgba(15, 29, 43, .08);
	}

	.care-table tbody tr:hover {
		background: rgba(15, 138, 122, .04);
	}

	.care-alert {
		color: #c0392b;
		font-weight: 600;
	}

	.care-action {
		color: var(--primary);
		font-weight: 600;
	}
</style>
