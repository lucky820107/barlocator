<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
:root {
    --header-w: #ffff;
    --button: #e0e0e0;
    --footer-bg: #EAEAEA;
}
body {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    background-image: url(assets/images/bg.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
header {
    max-width: 100%;
    background: var(--header-w);
    display: flex;
    justify-content: center;
    padding: 10px 0;
    align-items: center;
    position: relative;
}
.logo {
    padding: 0.8rem;
    display: flex;
}
.language {
    position: absolute;
    right: 0rem;
    transform: translateX(-50%);
    padding-right: 40px;
}
.main-logo {
    display: flex;
    justify-content: center;
    padding-top: 50px;
}
.form-box {
    padding-top: 4rem;
}
.checkbox-form {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgb(0 0 0 / 36%);
}
.checkbox-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 10px 20px;
    padding: 20px;
}
.checkbox-grid label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
}
.search-button {
    display: flex;
    justify-content: center;
    padding: 2rem 0;
}
.search-button button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: var(--button);
    color: #000;
    font-size: 18px;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    box-shadow: 3px 3px 0 #666;
    cursor: pointer;
    transition: all 0.2s ease;
}
.search-button button:hover {
    background-color: #000;
    color: gold;
    box-shadow: 4px 4px 6px #444;
}
.search-button button:hover .search-icon {
    content: url('/assets/images/Vector-h.svg');
}

/* ---------- map ---------- */

.mapbax {
    display: flex;
    justify-content: center;
    padding-top: 50px;
    gap: 30px;
}
.map-wrapper {
    width: 600px;
    height: 400px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.map-wrapper iframe {
    width: 100%;
    height: 100%;
    border: none;
}
.information {
    background: #fff;
}
.information-box {
    display: flex;
    justify-content: space-around;
    padding: 20px 0;
}
.logo-icon {
    width: 60px;
    height: 60px;
    border: 1px solid #000;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.logo-icon img {
    width: 30px;
    height: 30px;
}
.store {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
}
/* -------- tag -------- */
.tags {
    margin-top: 8px;
    display: flex;
    gap: 8px;
}
.tag {
    background-color: #e0e0e0;
    border-radius: 20px;
    padding: 4px 12px;
    font-size: 14px;
}

.brief-box {
    padding: 20px
}

/* ---------- Footer Container ---------- */
.site-footer {
    background-color: #f2f2f2;
    padding: 30px 0;
    text-align: center;
    font-family: 'Microsoft JhengHei', sans-serif;
    font-size: 14px;
    color: #555;
    margin-top: 2rem;
}

/* ---------- 連結列 ---------- */
.footer-links {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 16px;
}

.footer-links a {
    color: #555;
    text-decoration: none;
    transition: color 0.2s ease;
}

.footer-links a:hover {
    color: #000;
}

/* ---------- 聯絡方式列 ---------- */
.footer-contact {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
}

.footer-icon {
    width: 20px;
    height: 20px;
    vertical-align: middle;
}

.footer-email {
    color: #555;
    text-decoration: none;
    transition: color 0.2s ease;
}

.footer-email:hover {
    color: #000;
}
</style>
