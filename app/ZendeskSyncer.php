<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZendeskSyncer extends Model
{
    public function createTicket(Ticket $ticket)
    {
        $ticket = [
          "status" => "open",
          "uuid" => "abcdef12345678",
          "subject" => "Rusak pak!",
          "requester" => [
              "uuid" => "aaaabbbccc111",
              "name" => "Andi"
          ],
          "comments" => [
              [
                "uuid" => "a1b1c1d2",
                "author" => [
                  "uuid" => "aaaabbbccc111",
                  "name" => "Norman"
                ],
                "body" => "Ngga jalan tadi pas gw ambil"
              ],
          ],
          "custom_fields" => [
              "zd_custom_fields" => [
                  "Country" => "Indonesia"
              ]
          ],
          "tags" => ['red', 'blue'],
        ];

        $res = Client::put('https://treesdemo1.zendesk.com/sharing/tickets/abcdefghijklmn4', [
          "body" => $ticket
        ]);

        
    }

    public function updateTicket()
    {

    }

}
