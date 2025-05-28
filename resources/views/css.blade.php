<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
:root {
    --header-w: #ffff;
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
    padding-top: 20px;
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
}
.search-button button {
    padding: 5px 15px;
}
</style>
