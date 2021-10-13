<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/christ">
        <html>
            <body>
                <h3>Gateways Registration Data</h3>
                <table border="10">
                    <tr bgcolor="lightgrey">
                        <th>Name</th>
                        <th>Branch</th>
                        <th>College</th>
                        <th>Email</th>
                    </tr>
                    <xsl:for-each select="cs">
                        <tr>
                            <td><xsl:value-of select="stu-name"/></td>
                            <td><xsl:value-of select="stu-branch"/></td>
                            <td><xsl:value-of select="stu-college"/></td>
                            <td><xsl:value-of select="stu-email"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>