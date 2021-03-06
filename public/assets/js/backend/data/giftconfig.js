define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'data/giftconfig/index',
                    add_url: 'data/giftconfig/add',
                    edit_url: 'data/giftconfig/edit',
                    del_url: 'data/giftconfig/del',
                    multi_url: 'data/giftconfig/multi',
                    table: 'gift_config',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'name', title: __('Name')},
                        {field: 'icon', title: __('Icon'), operate: false, formatter: Table.api.formatter.image},
                        {field: 'platformprice', title: __('Platformprice'), operate:'BETWEEN'},
                        {field: 'realprice', title: __('Realprice'), operate:'BETWEEN'},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"normal":__('normal'),"stop":__('stop')}},
                        {field: 'status_text', title: __('Status'), operate:false},
                        {field: 'pid', title: __('Pid'), visible: false},
                        {field: 'platform.id', title: __('Platform.id'), visible: false},
                        {field: 'platform.name', title: __('Platform.name'), visible: false},
                        {field: 'platform.status', title: __('Platform.status'), visible: false},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});