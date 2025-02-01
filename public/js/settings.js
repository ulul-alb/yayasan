! function() {
    var t = {
            4963: function(t) {
                t.exports = function(t) {
                    if ("function" != typeof t) throw TypeError(t + " is not a function!");
                    return t
                }
            },
            7722: function(t, e, n) {
                var r = n(6314)("unscopables"),
                    o = Array.prototype;
                null == o[r] && n(7728)(o, r, {}), t.exports = function(t) {
                    o[r][t] = !0
                }
            },
            7007: function(t, e, n) {
                var r = n(5286);
                t.exports = function(t) {
                    if (!r(t)) throw TypeError(t + " is not an object!");
                    return t
                }
            },
            9315: function(t, e, n) {
                var r = n(2110),
                    o = n(875),
                    i = n(2337);
                t.exports = function(t) {
                    return function(e, n, u) {
                        var c, a = r(e),
                            s = o(a.length),
                            f = i(u, s);
                        if (t && n != n) {
                            for (; s > f;)
                                if ((c = a[f++]) != c) return !0
                        } else
                            for (; s > f; f++)
                                if ((t || f in a) && a[f] === n) return t || f || 0;
                        return !t && -1
                    }
                }
            },
            5466: function(t) {
                var e = {}.toString;
                t.exports = function(t) {
                    return e.call(t).slice(8, -1)
                }
            },
            5645: function(t) {
                var e = t.exports = {
                    version: "2.6.12"
                };
                "number" == typeof __e && (__e = e)
            },
            741: function(t, e, n) {
                var r = n(4963);
                t.exports = function(t, e, n) {
                    if (r(t), void 0 === e) return t;
                    switch (n) {
                        case 1:
                            return function(n) {
                                return t.call(e, n)
                            };
                        case 2:
                            return function(n, r) {
                                return t.call(e, n, r)
                            };
                        case 3:
                            return function(n, r, o) {
                                return t.call(e, n, r, o)
                            }
                    }
                    return function() {
                        return t.apply(e, arguments)
                    }
                }
            },
            1355: function(t) {
                t.exports = function(t) {
                    if (null == t) throw TypeError("Can't call method on  " + t);
                    return t
                }
            },
            7057: function(t, e, n) {
                t.exports = !n(4253)((function() {
                    return 7 != Object.defineProperty({}, "a", {
                        get: function() {
                            return 7
                        }
                    }).a
                }))
            },
            2457: function(t, e, n) {
                var r = n(5286),
                    o = n(3816).document,
                    i = r(o) && r(o.createElement);
                t.exports = function(t) {
                    return i ? o.createElement(t) : {}
                }
            },
            4430: function(t) {
                t.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")
            },
            2985: function(t, e, n) {
                var r = n(3816),
                    o = n(5645),
                    i = n(7728),
                    u = n(3415),
                    c = n(741),
                    a = "prototype",
                    s = function(t, e, n) {
                        var f, p, l, h, d = t & s.F,
                            y = t & s.G,
                            v = t & s.S,
                            g = t & s.P,
                            m = t & s.B,
                            b = y ? r : v ? r[e] || (r[e] = {}) : (r[e] || {})[a],
                            x = y ? o : o[e] || (o[e] = {}),
                            S = x[a] || (x[a] = {});
                        for (f in y && (n = e), n) l = ((p = !d && b && void 0 !== b[f]) ? b : n)[f], h = m && p ? c(l, r) : g && "function" == typeof l ? c(Function.call, l) : l, b && u(b, f, l, t & s.U), x[f] != l && i(x, f, h), g && S[f] != l && (S[f] = l)
                    };
                r.core = o, s.F = 1, s.G = 2, s.S = 4, s.P = 8, s.B = 16, s.W = 32, s.U = 64, s.R = 128, t.exports = s
            },
            4253: function(t) {
                t.exports = function(t) {
                    try {
                        return !!t()
                    } catch (t) {
                        return !0
                    }
                }
            },
            18: function(t, e, n) {
                t.exports = n(3825)("native-function-to-string", Function.toString)
            },
            3816: function(t) {
                var e = t.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
                "number" == typeof __g && (__g = e)
            },
            9181: function(t) {
                var e = {}.hasOwnProperty;
                t.exports = function(t, n) {
                    return e.call(t, n)
                }
            },
            7728: function(t, e, n) {
                var r = n(9275),
                    o = n(681);
                t.exports = n(7057) ? function(t, e, n) {
                    return r.f(t, e, o(1, n))
                } : function(t, e, n) {
                    return t[e] = n, t
                }
            },
            639: function(t, e, n) {
                var r = n(3816).document;
                t.exports = r && r.documentElement
            },
            1734: function(t, e, n) {
                t.exports = !n(7057) && !n(4253)((function() {
                    return 7 != Object.defineProperty(n(2457)("div"), "a", {
                        get: function() {
                            return 7
                        }
                    }).a
                }))
            },
            9797: function(t, e, n) {
                var r = n(5466);
                t.exports = Object("z").propertyIsEnumerable(0) ? Object : function(t) {
                    return "String" == r(t) ? t.split("") : Object(t)
                }
            },
            5286: function(t) {
                t.exports = function(t) {
                    return "object" == typeof t ? null !== t : "function" == typeof t
                }
            },
            9988: function(t, e, n) {
                "use strict";
                var r = n(2503),
                    o = n(681),
                    i = n(2943),
                    u = {};
                n(7728)(u, n(6314)("iterator"), (function() {
                    return this
                })), t.exports = function(t, e, n) {
                    t.prototype = r(u, {
                        next: o(1, n)
                    }), i(t, e + " Iterator")
                }
            },
            2923: function(t, e, n) {
                "use strict";
                var r = n(4461),
                    o = n(2985),
                    i = n(3415),
                    u = n(7728),
                    c = n(7234),
                    a = n(9988),
                    s = n(2943),
                    f = n(468),
                    p = n(6314)("iterator"),
                    l = !([].keys && "next" in [].keys()),
                    h = "keys",
                    d = "values",
                    y = function() {
                        return this
                    };
                t.exports = function(t, e, n, v, g, m, b) {
                    a(n, e, v);
                    var x, S, L, w = function(t) {
                            if (!l && t in _) return _[t];
                            switch (t) {
                                case h:
                                case d:
                                    return function() {
                                        return new n(this, t)
                                    }
                            }
                            return function() {
                                return new n(this, t)
                            }
                        },
                        O = e + " Iterator",
                        j = g == d,
                        P = !1,
                        _ = t.prototype,
                        T = _[p] || _["@@iterator"] || g && _[g],
                        q = T || w(g),
                        A = g ? j ? w("entries") : q : void 0,
                        E = "Array" == e && _.entries || T;
                    if (E && (L = f(E.call(new t))) !== Object.prototype && L.next && (s(L, O, !0), r || "function" == typeof L[p] || u(L, p, y)), j && T && T.name !== d && (P = !0, q = function() {
                            return T.call(this)
                        }), r && !b || !l && !P && _[p] || u(_, p, q), c[e] = q, c[O] = y, g)
                        if (x = {
                                values: j ? q : w(d),
                                keys: m ? q : w(h),
                                entries: A
                            }, b)
                            for (S in x) S in _ || i(_, S, x[S]);
                        else o(o.P + o.F * (l || P), e, x);
                    return x
                }
            },
            5436: function(t) {
                t.exports = function(t, e) {
                    return {
                        value: e,
                        done: !!t
                    }
                }
            },
            7234: function(t) {
                t.exports = {}
            },
            4461: function(t) {
                t.exports = !1
            },
            2503: function(t, e, n) {
                var r = n(7007),
                    o = n(5588),
                    i = n(4430),
                    u = n(9335)("IE_PROTO"),
                    c = function() {},
                    a = "prototype",
                    s = function() {
                        var t, e = n(2457)("iframe"),
                            r = i.length;
                        for (e.style.display = "none", n(639).appendChild(e), e.src = "javascript:", (t = e.contentWindow.document).open(), t.write("<script>document.F=Object<\/script>"), t.close(), s = t.F; r--;) delete s[a][i[r]];
                        return s()
                    };
                t.exports = Object.create || function(t, e) {
                    var n;
                    return null !== t ? (c[a] = r(t), n = new c, c[a] = null, n[u] = t) : n = s(), void 0 === e ? n : o(n, e)
                }
            },
            9275: function(t, e, n) {
                var r = n(7007),
                    o = n(1734),
                    i = n(1689),
                    u = Object.defineProperty;
                e.f = n(7057) ? Object.defineProperty : function(t, e, n) {
                    if (r(t), e = i(e, !0), r(n), o) try {
                        return u(t, e, n)
                    } catch (t) {}
                    if ("get" in n || "set" in n) throw TypeError("Accessors not supported!");
                    return "value" in n && (t[e] = n.value), t
                }
            },
            5588: function(t, e, n) {
                var r = n(9275),
                    o = n(7007),
                    i = n(7184);
                t.exports = n(7057) ? Object.defineProperties : function(t, e) {
                    o(t);
                    for (var n, u = i(e), c = u.length, a = 0; c > a;) r.f(t, n = u[a++], e[n]);
                    return t
                }
            },
            468: function(t, e, n) {
                var r = n(9181),
                    o = n(508),
                    i = n(9335)("IE_PROTO"),
                    u = Object.prototype;
                t.exports = Object.getPrototypeOf || function(t) {
                    return t = o(t), r(t, i) ? t[i] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? u : null
                }
            },
            189: function(t, e, n) {
                var r = n(9181),
                    o = n(2110),
                    i = n(9315)(!1),
                    u = n(9335)("IE_PROTO");
                t.exports = function(t, e) {
                    var n, c = o(t),
                        a = 0,
                        s = [];
                    for (n in c) n != u && r(c, n) && s.push(n);
                    for (; e.length > a;) r(c, n = e[a++]) && (~i(s, n) || s.push(n));
                    return s
                }
            },
            7184: function(t, e, n) {
                var r = n(189),
                    o = n(4430);
                t.exports = Object.keys || function(t) {
                    return r(t, o)
                }
            },
            681: function(t) {
                t.exports = function(t, e) {
                    return {
                        enumerable: !(1 & t),
                        configurable: !(2 & t),
                        writable: !(4 & t),
                        value: e
                    }
                }
            },
            3415: function(t, e, n) {
                var r = n(3816),
                    o = n(7728),
                    i = n(9181),
                    u = n(3953)("src"),
                    c = n(18),
                    a = "toString",
                    s = ("" + c).split(a);
                n(5645).inspectSource = function(t) {
                    return c.call(t)
                }, (t.exports = function(t, e, n, c) {
                    var a = "function" == typeof n;
                    a && (i(n, "name") || o(n, "name", e)), t[e] !== n && (a && (i(n, u) || o(n, u, t[e] ? "" + t[e] : s.join(String(e)))), t === r ? t[e] = n : c ? t[e] ? t[e] = n : o(t, e, n) : (delete t[e], o(t, e, n)))
                })(Function.prototype, a, (function() {
                    return "function" == typeof this && this[u] || c.call(this)
                }))
            },
            2943: function(t, e, n) {
                var r = n(9275).f,
                    o = n(9181),
                    i = n(6314)("toStringTag");
                t.exports = function(t, e, n) {
                    t && !o(t = n ? t : t.prototype, i) && r(t, i, {
                        configurable: !0,
                        value: e
                    })
                }
            },
            9335: function(t, e, n) {
                var r = n(3825)("keys"),
                    o = n(3953);
                t.exports = function(t) {
                    return r[t] || (r[t] = o(t))
                }
            },
            3825: function(t, e, n) {
                var r = n(5645),
                    o = n(3816),
                    i = "__core-js_shared__",
                    u = o[i] || (o[i] = {});
                (t.exports = function(t, e) {
                    return u[t] || (u[t] = void 0 !== e ? e : {})
                })("versions", []).push({
                    version: r.version,
                    mode: n(4461) ? "pure" : "global",
                    copyright: "Â© 2020 Denis Pushkarev (zloirock.ru)"
                })
            },
            2337: function(t, e, n) {
                var r = n(1467),
                    o = Math.max,
                    i = Math.min;
                t.exports = function(t, e) {
                    return (t = r(t)) < 0 ? o(t + e, 0) : i(t, e)
                }
            },
            1467: function(t) {
                var e = Math.ceil,
                    n = Math.floor;
                t.exports = function(t) {
                    return isNaN(t = +t) ? 0 : (t > 0 ? n : e)(t)
                }
            },
            2110: function(t, e, n) {
                var r = n(9797),
                    o = n(1355);
                t.exports = function(t) {
                    return r(o(t))
                }
            },
            875: function(t, e, n) {
                var r = n(1467),
                    o = Math.min;
                t.exports = function(t) {
                    return t > 0 ? o(r(t), 9007199254740991) : 0
                }
            },
            508: function(t, e, n) {
                var r = n(1355);
                t.exports = function(t) {
                    return Object(r(t))
                }
            },
            1689: function(t, e, n) {
                var r = n(5286);
                t.exports = function(t, e) {
                    if (!r(t)) return t;
                    var n, o;
                    if (e && "function" == typeof(n = t.toString) && !r(o = n.call(t))) return o;
                    if ("function" == typeof(n = t.valueOf) && !r(o = n.call(t))) return o;
                    if (!e && "function" == typeof(n = t.toString) && !r(o = n.call(t))) return o;
                    throw TypeError("Can't convert object to primitive value")
                }
            },
            3953: function(t) {
                var e = 0,
                    n = Math.random();
                t.exports = function(t) {
                    return "Symbol(".concat(void 0 === t ? "" : t, ")_", (++e + n).toString(36))
                }
            },
            6314: function(t, e, n) {
                var r = n(3825)("wks"),
                    o = n(3953),
                    i = n(3816).Symbol,
                    u = "function" == typeof i;
                (t.exports = function(t) {
                    return r[t] || (r[t] = u && i[t] || (u ? i : o)("Symbol." + t))
                }).store = r
            },
            6997: function(t, e, n) {
                "use strict";
                var r = n(7722),
                    o = n(5436),
                    i = n(7234),
                    u = n(2110);
                t.exports = n(2923)(Array, "Array", (function(t, e) {
                    this._t = u(t), this._i = 0, this._k = e
                }), (function() {
                    var t = this._t,
                        e = this._k,
                        n = this._i++;
                    return !t || n >= t.length ? (this._t = void 0, o(1)) : o(0, "keys" == e ? n : "values" == e ? t[n] : [n, t[n]])
                }), "values"), i.Arguments = i.Array, r("keys"), r("values"), r("entries")
            },
            2773: function(t, e, n) {
                "use strict";
                var r = n(2985),
                    o = n(9315)(!0);
                r(r.P, "Array", {
                    includes: function(t) {
                        return o(this, t, arguments.length > 1 ? arguments[1] : void 0)
                    }
                }), n(7722)("includes")
            },
            1181: function(t, e, n) {
                for (var r = n(6997), o = n(7184), i = n(3415), u = n(3816), c = n(7728), a = n(7234), s = n(6314), f = s("iterator"), p = s("toStringTag"), l = a.Array, h = {
                        CSSRuleList: !0,
                        CSSStyleDeclaration: !1,
                        CSSValueList: !1,
                        ClientRectList: !1,
                        DOMRectList: !1,
                        DOMStringList: !1,
                        DOMTokenList: !0,
                        DataTransferItemList: !1,
                        FileList: !1,
                        HTMLAllCollection: !1,
                        HTMLCollection: !1,
                        HTMLFormElement: !1,
                        HTMLSelectElement: !1,
                        MediaList: !0,
                        MimeTypeArray: !1,
                        NamedNodeMap: !1,
                        NodeList: !0,
                        PaintRequestList: !1,
                        Plugin: !1,
                        PluginArray: !1,
                        SVGLengthList: !1,
                        SVGNumberList: !1,
                        SVGPathSegList: !1,
                        SVGPointList: !1,
                        SVGStringList: !1,
                        SVGTransformList: !1,
                        SourceBufferList: !1,
                        StyleSheetList: !0,
                        TextTrackCueList: !1,
                        TextTrackList: !1,
                        TouchList: !1
                    }, d = o(h), y = 0; y < d.length; y++) {
                    var v, g = d[y],
                        m = h[g],
                        b = u[g],
                        x = b && b.prototype;
                    if (x && (x[f] || c(x, f, l), x[p] || c(x, p, g), a[g] = l, m))
                        for (v in r) x[v] || i(x, v, r[v], !0)
                }
            },
            7025: function(t, e, n) {
                ! function(t) {
                    "use strict";
                    var e, r = /^[a-z]+:/,
                        o = /[-a-z0-9]+(\.[-a-z0-9])*:\d+/i,
                        i = /\/\/(.*?)(?::(.*?))?@/,
                        u = /^win/i,
                        c = /:$/,
                        a = /^\?/,
                        s = /^#/,
                        f = /(.*\/)/,
                        p = /^\/{2,}/,
                        l = /(^\/?)/,
                        h = /'/g,
                        d = /%([ef][0-9a-f])%([89ab][0-9a-f])%([89ab][0-9a-f])/gi,
                        y = /%([cd][0-9a-f])%([89ab][0-9a-f])/gi,
                        v = /%([0-7][0-9a-f])/gi,
                        g = /\+/g,
                        m = /^\w:$/,
                        b = /[^/#?]/,
                        x = "undefined" == typeof window && void 0 !== n.g && !0,
                        S = !x && t.navigator && t.navigator.userAgent && ~t.navigator.userAgent.indexOf("MSIE"),
                        L = x ? t.require : null,
                        w = {
                            protocol: "protocol",
                            host: "hostname",
                            port: "port",
                            path: "pathname",
                            query: "search",
                            hash: "hash"
                        },
                        O = {
                            ftp: 21,
                            gopher: 70,
                            http: 80,
                            https: 443,
                            ws: 80,
                            wss: 443
                        };

                    function j() {
                        return x ? e = e || "file://" + (process.platform.match(u) ? "/" : "") + L("fs").realpathSync(".") : "about:srcdoc" === document.location.href ? self.parent.document.location.href : document.location.href
                    }

                    function P(t) {
                        return encodeURIComponent(t).replace(h, "%27")
                    }

                    function _(t) {
                        return (t = (t = (t = t.replace(g, " ")).replace(d, (function(t, e, n, r) {
                            var o = parseInt(e, 16) - 224,
                                i = parseInt(n, 16) - 128;
                            if (0 == o && i < 32) return t;
                            var u = (o << 12) + (i << 6) + (parseInt(r, 16) - 128);
                            return 65535 < u ? t : String.fromCharCode(u)
                        }))).replace(y, (function(t, e, n) {
                            var r = parseInt(e, 16) - 192;
                            if (r < 2) return t;
                            var o = parseInt(n, 16) - 128;
                            return String.fromCharCode((r << 6) + o)
                        }))).replace(v, (function(t, e) {
                            return String.fromCharCode(parseInt(e, 16))
                        }))
                    }

                    function T(t) {
                        for (var e = t.split("&"), n = 0, r = e.length; n < r; n++) {
                            var o = e[n].split("="),
                                i = decodeURIComponent(o[0].replace(g, " "));
                            if (i) {
                                var u = void 0 !== o[1] ? _(o[1]) : null;
                                void 0 === this[i] ? this[i] = u : (this[i] instanceof Array || (this[i] = [this[i]]), this[i].push(u))
                            }
                        }
                    }

                    function q(t, e) {
                        ! function(t, e, n) {
                            var u, h, d;
                            e = e || j(), x ? u = L("url").parse(e) : (u = document.createElement("a")).href = e;
                            var y, v, g = (v = {
                                path: !0,
                                query: !0,
                                hash: !0
                            }, (y = e) && r.test(y) && (v.protocol = !0, v.host = !0, o.test(y) && (v.port = !0), i.test(y) && (v.user = !0, v.pass = !0)), v);
                            for (h in d = e.match(i) || [], w) g[h] ? t[h] = u[w[h]] || "" : t[h] = "";
                            if (t.protocol = t.protocol.replace(c, ""), t.query = t.query.replace(a, ""), t.hash = _(t.hash.replace(s, "")), t.user = _(d[1] || ""), t.pass = _(d[2] || ""), t.port = O[t.protocol] == t.port || 0 == t.port ? "" : t.port, !g.protocol && b.test(e.charAt(0)) && (t.path = e.split("?")[0].split("#")[0]), !g.protocol && n) {
                                var m = new q(j().match(f)[0]),
                                    P = m.path.split("/"),
                                    A = t.path.split("/"),
                                    E = ["protocol", "user", "pass", "host", "port"],
                                    M = E.length;
                                for (P.pop(), h = 0; h < M; h++) t[E[h]] = m[E[h]];
                                for (;
                                    ".." === A[0];) P.pop(), A.shift();
                                t.path = ("/" !== e.charAt(0) ? P.join("/") : "") + "/" + A.join("/")
                            }
                            t.path = t.path.replace(p, "/"), S && (t.path = t.path.replace(l, "/")), t.paths(t.paths()), t.query = new T(t.query)
                        }(this, t, !e)
                    }
                    T.prototype.toString = function() {
                        var t, e, n = "",
                            r = P;
                        for (t in this) {
                            var o = this[t];
                            if (!(o instanceof Function || void 0 === o))
                                if (o instanceof Array) {
                                    var i = o.length;
                                    if (!i) {
                                        n += (n ? "&" : "") + r(t) + "=";
                                        continue
                                    }
                                    for (e = 0; e < i; e++) {
                                        var u = o[e];
                                        void 0 !== u && (n += n ? "&" : "", n += r(t) + (null === u ? "" : "=" + r(u)))
                                    }
                                } else n += n ? "&" : "", n += r(t) + (null === o ? "" : "=" + r(o))
                        }
                        return n
                    }, q.prototype.clearQuery = function() {
                        for (var t in this.query) this.query[t] instanceof Function || delete this.query[t];
                        return this
                    }, q.prototype.queryLength = function() {
                        var t = 0;
                        for (var e in this.query) this.query[e] instanceof Function || t++;
                        return t
                    }, q.prototype.isEmptyQuery = function() {
                        return 0 === this.queryLength()
                    }, q.prototype.paths = function(t) {
                        var e, n = "",
                            r = 0;
                        if (t && t.length && t + "" !== t) {
                            for (this.isAbsolute() && (n = "/"), e = t.length; r < e; r++) t[r] = !r && m.test(t[r]) ? t[r] : P(t[r]);
                            this.path = n + t.join("/")
                        }
                        for (r = 0, e = (t = ("/" === this.path.charAt(0) ? this.path.slice(1) : this.path).split("/")).length; r < e; r++) t[r] = _(t[r]);
                        return t
                    }, q.prototype.encode = P, q.prototype.decode = _, q.prototype.isAbsolute = function() {
                        return this.protocol || "/" === this.path.charAt(0)
                    }, q.prototype.toString = function() {
                        return (this.protocol && this.protocol + "://") + (this.user && P(this.user) + (this.pass && ":" + P(this.pass)) + "@") + (this.host && this.host) + (this.port && ":" + this.port) + (this.path && this.path) + (this.query.toString() && "?" + this.query) + (this.hash && "#" + P(this.hash))
                    }, t[t.exports ? "exports" : "Url"] = q
                }((t = n.nmd(t)).exports ? t : window)
            }
        },
        e = {};

    function n(r) {
        var o = e[r];
        if (void 0 !== o) return o.exports;
        var i = e[r] = {
            id: r,
            loaded: !1,
            exports: {}
        };
        return t[r](i, i.exports, n), i.loaded = !0, i.exports
    }
    n.n = function(t) {
            var e = t && t.__esModule ? function() {
                return t.default
            } : function() {
                return t
            };
            return n.d(e, {
                a: e
            }), e
        }, n.d = function(t, e) {
            for (var r in e) n.o(e, r) && !n.o(t, r) && Object.defineProperty(t, r, {
                enumerable: !0,
                get: e[r]
            })
        }, n.g = function() {
            if ("object" == typeof globalThis) return globalThis;
            try {
                return this || new Function("return this")()
            } catch (t) {
                if ("object" == typeof window) return window
            }
        }(), n.o = function(t, e) {
            return Object.prototype.hasOwnProperty.call(t, e)
        }, n.nmd = function(t) {
            return t.paths = [], t.children || (t.children = []), t
        },
        function() {
            "use strict";
            n(6997), n(1181), n(2773);
            var t = n(7025);
            const e = new(n.n(t)()),
                r = "adminkit_config_",
                o = ".js-settings",
                i = {
                    theme: "default",
                    layout: "fluid",
                    sidebarPosition: "left",
                    sidebarLayout: "default"
                },
                u = {
                    theme: ["default", "dark", "light", "colored"],
                    layout: ["fluid", "boxed"],
                    sidebarPosition: ["left", "right"],
                    sidebarLayout: ["default", "compact"]
                },
                c = (t, e) => {},
                a = () => ({
                    theme: s("theme"),
                    layout: s("layout"),
                    sidebarPosition: s("sidebarPosition"),
                    sidebarLayout: s("sidebarLayout")
                }),
                s = t => localStorage.getItem("".concat(r).concat(t)),
                f = (t, e) => {
                    localStorage.setItem("".concat(r).concat(t), e)
                },
                p = t => {
                    localStorage.removeItem("".concat(r).concat(t))
                };
            
            const l = new MutationObserver((() => {
                document.body && (Object.keys(e.query).length > 0 ? (p("theme"), p("layout"), p("sidebarPosition"), p("sidebarLayout"), Object.entries(e.query).forEach((t => {
                    let [e, n] = t;
                    u[e] && u[e].includes(n) && (c(e, n), f(e, n))
                }))) : (() => {
                    for (let [t, e] of Object.entries(a())) c(t, e || i[t])
                })(), l.disconnect())
            }));
            l.observe(document.documentElement, {
                childList: !0
            })
        }()
}();