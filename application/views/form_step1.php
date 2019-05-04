
<html>
<head>
    <title>Form Step1</title>

</head>

<body>

    <h1>Step1</h1>

    <form>
        <fieldset>
            <p class="attention">*は必須項目です</p>
            <table>
                <tbody>
                    <tr>
                        <th>Name<span>*</span></th>
                        <td><input type="text" id="name" name="name" value="" /></td>
                    </tr>
                    <tr>
                        <th>Kana<span>*</span></th>
                        <td><input type="text" id="kana" name="kana" value="" /></td>
                    </tr>
                    <tr>
                        <th>Mail<span>*</span></th>
                        <td><input type="text" id="email1" name="email" value="" />
                        @
                        <input type="text" name="email2" value="" /></td>
                    </tr>
                    <tr>
                        <th>Sex<span>*</span></th>
                        <td>
                                <label for="male"><input type="radio" id="male" name="sex" value="male" />male</label>
                                <label for="female"><input type="radio" id="female" name="sex" value="female" />female</label>
                        </td>
                    </tr>
                    <tr>
                        <th>Prefecture<span>*</span><br />
                        this is selectable</th>
                        <td>
                            <select id="pref" name="pref">
                                    <option value="">---</option>
                                    <option value="08">東京都</option>
                                    <option value="09">茨城県</option>
                                    <option value="10">栃木県</option>
                                    <option value="11">群馬県</option>
                                    <option value="12">埼玉県</option>
                                    <option value="13">千葉県</option>
                                    <option value="14">神奈川県</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Favorite<span>*</span></th>
                        <td>
                                <label for="f1"><input type="checkbox" id="f1" name="fav" value="f1">Ramen</label>
                                <label for="f2"><input type="checkbox" id="f2" name="fav" value="f2">Soba</label>
                                <label for="f3"><input type="checkbox" id="f3" name="fav" value="f3">Udon</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <p class="submit"><input type="submit" value="submit"/></p>
    </form>

</body>
</html>
