var api = require("../../api.js"), app = getApp();

Page({
    data: {
        total_price: 0,
        cart_check_all: !1,
        cart_list: [],
        mch_list: [],
        loading: !0,
        check_all_self: !1
    },
    onLoad: function(t) {
        app.pageOnLoad(this);
    },
    onReady: function() {},
    onShow: function() {
        app.pageOnShow(this);
        this.setData({
            cart_check_all: !1,
            show_cart_edit: !1
        }), this.getCartList();
    },
    getCartList: function() {
        var a = this;
        wx.showNavigationBarLoading(), a.setData({
            show_no_data_tip: !1,
            loading: !0
        }), app.request({
            url: api.cart.list,
            success: function(t) {
                0 == t.code && a.setData({
                    cart_list: t.data.list,
                    mch_list: t.data.mch_list,
                    rem_list: t.data.rem_list,
                    total_price: 0,
                    cart_check_all: !1,
                    show_cart_edit: !1
                }), a.setData({
                    show_no_data_tip: 0 == a.data.cart_list.length
                });
            },
            complete: function() {
                wx.hideNavigationBarLoading(), a.setData({
                    loading: !1
                });
            }
        });
    },
    cartLess: function(t) {
        var a = this;
        if (t.currentTarget.dataset.type && "mch" == t.currentTarget.dataset.type) {
            var i = t.currentTarget.dataset.mchIndex, c = t.currentTarget.dataset.index;
            a.data.mch_list[i].list[c].num = a.data.mch_list[i].list[c].num - 1, a.data.mch_list[i].list[c].price = a.data.mch_list[i].list[c].num * a.data.mch_list[i].list[c].unitPrice, 
            a.setData({
                mch_list: a.data.mch_list
            });
        } else {
            var e = a.data.cart_list;
            for (var s in e) t.currentTarget.id == e[s].cart_id && (e[s].num = a.data.cart_list[s].num - 1, 
            e[s].price = a.data.cart_list[s].unitPrice * e[s].num, a.setData({
                cart_list: e
            }));
        }
        a.updateTotalPrice();
    },
    cartAdd: function(t) {
        var a = this;
        if (t.currentTarget.dataset.type && "mch" == t.currentTarget.dataset.type) {
            var i = t.currentTarget.dataset.mchIndex, c = t.currentTarget.dataset.index;
            a.data.mch_list[i].list[c].num = a.data.mch_list[i].list[c].num + 1, a.data.mch_list[i].list[c].price = a.data.mch_list[i].list[c].num * a.data.mch_list[i].list[c].unitPrice, 
            a.setData({
                mch_list: a.data.mch_list
            });
        } else {
            var e = a.data.cart_list;
            for (var s in e) t.currentTarget.id == e[s].cart_id && (e[s].num = a.data.cart_list[s].num + 1, 
            e[s].price = a.data.cart_list[s].unitPrice * e[s].num, a.setData({
                cart_list: e
            }));
        }
        a.updateTotalPrice();
    },
    cartCheck: function(t) {
        var a = this, i = t.currentTarget.dataset.index, c = t.currentTarget.dataset.type, e = t.currentTarget.dataset.mchIndex;
        "self" == c && (a.data.cart_list[i].checked = !a.data.cart_list[i].checked, a.setData({
            cart_list: a.data.cart_list
        })), "mch" == c && (a.data.mch_list[e].list[i].checked = !a.data.mch_list[e].list[i].checked, 
        a.setData({
            mch_list: a.data.mch_list
        })), a.updateTotalPrice();
    },
    cartCheckAll: function() {
        var t = this, a = t.data.cart_list, i = !1;
        for (var c in i = !t.data.cart_check_all, a) a[c].disabled && !t.data.show_cart_edit || (a[c].checked = i);
        if (t.data.mch_list && t.data.mch_list.length) for (var c in t.data.mch_list) for (var e in t.data.mch_list[c].list) t.data.mch_list[c].list[e].checked = i;
        t.setData({
            cart_check_all: i,
            cart_list: a,
            mch_list: t.data.mch_list
        }), t.updateTotalPrice();
    },
    updateTotalPrice: function() {
        var t = this, a = 0, i = t.data.cart_list;
        for (var c in i) i[c].checked && (a += i[c].price);
        for (var c in t.data.mch_list) for (var e in t.data.mch_list[c].list) t.data.mch_list[c].list[e].checked && (a += t.data.mch_list[c].list[e].price);
        t.setData({
            total_price: a.toFixed(2)
        });
    },
    cartSubmit: function() {
        var t = this, a = t.data.cart_list, i = t.data.mch_list, c = [], e = [];
        for (var s in a) a[s].checked && c.push(a[s].cart_id);
        for (var s in i) {
            var r = [];
            if (i[s].list && i[s].list.length) for (var l in i[s].list) i[s].list[l].checked && r.push(i[s].list[l].cart_id);
            r.length && e.push({
                id: i[s].id,
                cart_id_list: r
            });
        }
        if (0 == c.length && 0 == e.length) return !0;
        wx.showLoading({
            title: "正在提交",
            mask: !0
        }), t.saveCart(function() {
            wx.navigateTo({
                url: "/pages/order-submit/order-submit?cart_id_list=" + JSON.stringify(c) + "&mch_list=" + JSON.stringify(e)
            });
        });
    },
    cartEdit: function() {
        var t = this, a = t.data.cart_list;
        for (var i in a) a[i].checked = !1;
        t.setData({
            cart_list: a,
            show_cart_edit: !0,
            cart_check_all: !1
        }), t.updateTotalPrice();
    },
    cartDone: function() {
        var t = this.data.cart_list;
        for (var a in t) t[a].checked = !1;
        this.setData({
            cart_list: t,
            show_cart_edit: !1,
            cart_check_all: !1
        }), this.updateTotalPrice();
    },
    cartDelete: function() {
        var a = this, t = a.data.cart_list, i = [];
        for (var c in t) t[c].checked && i.push(t[c].cart_id);
        if (0 == i.length) return !0;
        wx.showModal({
            title: "提示",
            content: "确认删除" + i.length + "项内容？",
            success: function(t) {
                if (t.cancel) return !0;
                wx.showLoading({
                    title: "正在删除",
                    mask: !0
                }), app.request({
                    url: api.cart.delete,
                    data: {
                        cart_id_list: JSON.stringify(i)
                    },
                    success: function(t) {
                        wx.hideLoading(), wx.showToast({
                            title: t.msg
                        }), 0 == t.code && a.getCartList(), t.code;
                    }
                });
            }
        });
    },
    onHide: function() {
        this.saveCart();
    },
    onUnload: function() {
        this.saveCart();
    },
    saveCart: function(t) {
        var a = JSON.stringify(this.data.cart_list);
        app.request({
            url: api.cart.cart_edit,
            method: "post",
            data: {
                list: a,
                mch_list: JSON.stringify(this.data.mch_list)
            },
            success: function(t) {
                0 == t.code && console.log(t.msg);
            },
            complete: function() {
                "function" == typeof t && t();
            }
        });
    },
    checkGroup: function(t) {
        var a = this, i = t.currentTarget.dataset.type, c = t.currentTarget.dataset.index;
        if (console.log(t), "self" == i) {
            for (var e in a.data.cart_list) a.data.cart_list[e].checked = !a.data.check_all_self;
            a.setData({
                check_all_self: !a.data.check_all_self,
                cart_list: a.data.cart_list
            });
        }
        if ("mch" == i) {
            for (var e in a.data.mch_list[c].list) a.data.mch_list[c].list[e].checked = !a.data.mch_list[c].checked_all;
            a.data.mch_list[c].checked_all = !a.data.mch_list[c].checked_all, a.setData({
                mch_list: a.data.mch_list
            });
        }
        a.updateTotalPrice();
    }
});